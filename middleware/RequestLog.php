<?php

declare(strict_types=1);

namespace app\middleware;

use think\facade\Db;

class RequestLog
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        $response = $next($request);
        $method = $request->method();
        //创建日志，记录请求的数据
        Db::name('log_request_api')->insert([
            'request_time' => date('Y-m-d H:i:s', $request->server()['REQUEST_TIME']),
            'request_ip' => getip(),
            'routeOpen' => ltrim($request->root(), '/') . '/' . $request->pathinfo(),
            'route' => $request->rule()->getName(),
            'controller' => $request->controller(),
            'action' => $request->action(),
            'method' => $method,
            'header' => json_encode($request->header()),
            'token' => $request->header()['token'],
            'platform_id' => $request->platform_id,
            'uid' => $request->uid,
            'params' => json_encode($request->$method()),
            'return_data' => $response->getData() ? json_encode($response->getData()) : null,
        ]);
        return $response;
    }
}
