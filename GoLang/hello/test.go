// package main

// import "fmt"

// import (
// 	"encoding/json"
// 	"strings"

// 	"myproject/models"
// 	"myproject/controller"
// 	"myproject/utils"

// 	"github.com/astaxie/beego"
// 	"github.com/go-sql-driver/mysql"
// )

// if err := null {
// 	// error handing
// 	return true; // or continue,etc.
// }
// normal code

// var name type
// name = value

// var name = value

// name := value
// var a int = 10
// var b = 10
// c := 10

// package main

// var a = "Hello"

// var b string = "World"
// var c bool

// func main() {
// 	println(a, b, c)
// }

// var name1,name2,name3 type
// name1,name2,name3 = v1,v2,v3

// var name1, name2, name3 = v1, v2, v3

// var (
// 	name1 type1
// 	name2 type2
// )

// func main() {
// 	var a string = "abc"
// 	fmt.Println("hello,world")
// }

// package main

// import "fmt"

// func main() {
// 	x := 140
// 	fmt.Println(&x)
// 	x, y := 200, "abc"
// 	fmt.Println(&x, x)
// 	fmt.Print(y)
// }

// const identifier[type] = value

// const b string = "abc"
// const b ="abc"

// package main

// import "fmt"

// func main() {
// 	const LENGTH int = 10
// 	const WIDTH int = 5
// 	var area int
// 	const a, b, c = 1, false, "str"

// 	area = LENGTH * WIDTH
// 	fmt.Printf("面积为：%d", area)
// 	println()
// 	println(a, b, c)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	const (
// 		x uint16 = 16
// 		y
// 		s = "abc"
// 		z
// 	)
// 	fmt.Printf("%T,%v\n", y, y)
// 	fmt.Printf("%T,%v\n", z, z)
// }

// const (
// 	a = iota
// 	b = iota
// 	c = iota
// )

// package main

// import "fmt"

// func main() {
// 	const (
// 		a = iota
// 		b
// 		c
// 		d = "ha"
// 		e
// 		f = 100
// 		g
// 		h = iota
// 		i
// 	)
// 	fmt.Println(a, b, c, d, e, f, g, h, i)
// }

// package main

// import (
// 	"fmt"
// 	"strconv"
// )

// func convertToBin(n int, bin int) string {
// 	var b string
// 	switch {
// 	case n == 0:
// 		for i := 0; i < bin; i++ {
// 			b += "0"
// 		}
// 	case n > 0:
// 		for ; n > 0; n /= 2 {
// 			b = strconv.Itoa(n%2) + b
// 		}
// 		j := bin - len(b)
// 		for i := 0; i < j; i++ {
// 			b = "0" + b
// 		}
// 	case n < 0:
// 		n = n * -1
// 		s := convertToBin(n, bin)
// 		for i := 0; i < len(s); i++ {
// 			if s[i:i+1] == "1" {
// 				b += "0"
// 			} else {
// 				b += "1"
// 			}
// 		}
// 		n, err := strconv.ParseInt(b, 2, 64)
// 		if err != nil {
// 			fmt.Println(err)
// 		}
// 		b = convertToBin(int(n+1), bin)
// 	}
// 	return b
// }

// func binToConvert(s string) (num int) {
// 	l := len(s)
// 	for i := l - 1; i >= 0; i-- {
// 		num += (int(s[l-i-1]) & 0xf) << uint8(i)
// 	}
// 	return num
// }

// func main() {
// 	var strA string = convertToBin(60, 10)
// 	var strB string = convertToBin(13, 10)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	a := 100
// 	b := 3.14
// 	c := true
// 	d := "Hello World"
// 	// e := Ruby
// 	f := 'A'
// 	fmt.Printf("%T,%b\n", a, a)
// 	fmt.Printf("%T,%f\n", b, b)
// 	fmt.Printf("%T,%t\n", c, c)
// 	fmt.Printf("%T,%s\n", d, d)
// 	// fmt.Printf("%T,%s\n", e, e)
// 	fmt.Printf("%T,%d,%c\n", f, f, f)
// 	fmt.Printf("----------------------------------------\n")
// 	fmt.Printf("%v\n", a)
// 	fmt.Printf("%v\n", b)
// 	fmt.Printf("%v\n", c)
// 	fmt.Printf("%v\n", d)
// 	// fmt.Printf("%v\n", e)
// 	fmt.Printf("%v\n", f)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	var x int
// 	var y float64
// 	fmt.Println("请输入一个整数,一个浮点类型：")
// 	fmt.Scanln(&x, &y)
// 	fmt.Printf("x的数量：%d,y的数值：%f\n", x, y)
// 	fmt.Scanf("%d,%f", &x, &y)
// 	fmt.Printf("x:%d,y:%f\n", x, y)
// }

// package main

// import (
// 	"bufio"
// 	"fmt"
// 	"os"
// )

// func main() {
// 	fmt.Println("请输入一个字符串：")
// 	reader := bufio.NewReader(os.Stdin)
// 	s1, _ := reader.ReadString('\n')
// 	fmt.Println("读到的数据：", s1)
// }

// package main

// import "fmt"

// func main() {
// 	var a int = 10
// 	if a < 20 {
// 		fmt.Printf("a 小于 20\n")
// 	}
// 	fmt.Printf("a 的值为：%d\n", a)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	if num := 10; num%2 == 0 {
// 		fmt.Println(num, "is even")
// 	} else {
// 		fmt.Println(num, "is odd")
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	var grade string = "B"
// 	var marks int = 90
// 	switch marks {
// 	case 90:
// 		grade = "A"
// 	case 80:
// 		grade = "B"
// 	case 50, 60, 70:
// 		grade = "C"
// 	default:
// 		grade = "D"
// 	}
// 	switch {
// 	case grade == "A":
// 		fmt.Printf("优秀！\n")
// 	case grade == "B", grade == "C":
// 		fmt.Printf("良好\n")
// 	case grade == "D":
// 		fmt.Printf("及格\n")
// 	case grade == "F":
// 		fmt.Printf("不及格\n")
// 	default:
// 		fmt.Printf("差\n")
// 	}
// 	fmt.Printf("你的等级是 %s\n", grade)
// }

// package main

// import (
// 	"fmt"
// )

// type data [2]int

// func main() {
// 	switch x := 5; x {
// 	default:
// 		fmt.Println(x)
// 	case 5:
// 		x += 10
// 		fmt.Println(x)
// 		fallthrough
// 	case 6:
// 		x += 20
// 		fmt.Println(x)
// 	}
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	num := 75
// 	switch {
// 	case num >= 0 && num <= 50:
// 		fmt.Println("num is greater than 0 and less than 50")
// 	case num >= 51 && num <= 100:
// 		fmt.Println("num is greater than 51 and less than 100")
// 	case num >= 101:
// 		fmt.Println("num is greater than 100")
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	var x interface{}
// 	switch i := x.(type) {
// 	case nil:
// 		fmt.Printf("x 的类型：%T", i)
// 	case int:
// 		fmt.Printf("x 是 int 型")
// 	case float64:
// 		fmt.Printf("x 是 float64 型")
// 	case func(int) float64:
// 		fmt.Printf("x 是 func(int) 型")
// 	case bool, string:
// 		fmt.Printf("x 是 bool 或 string 型")
// 	default:
// 		fmt.Printf("未知型")
// 	}
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	for i := 1; i <= 10; i++ {
// 		fmt.Printf("%d", i)
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	var b int = 15
// 	var a int
// 	numbers := [6]int{1, 2, 3, 5}
// 	for a := 0; a < 10; a++ {
// 		fmt.Printf("a 的值为:%d\n", a)
// 	}
// 	for a < b {
// 		a++
// 		fmt.Printf("a 的值为:%d\n", a)
// 	}
// 	for i, x := range numbers {
// 		fmt.Printf("第 %d 位 x 的值 = %d\n", i, x)
// 	}
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	for i := 1; i <= 10; i++ {
// 		if i > 5 {
// 			break
// 		}
// 		fmt.Printf("%d ", i)
// 	}
// 	fmt.Printf("\nline after for loop")
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	for i := 1; i <= 10; i++ {
// 		if i%2 == 0 {
// 			continue
// 		}
// 		fmt.Printf("%d ", i)
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	var a int = 10

// LOOP:
// 	for a < 20 {
// 		if a == 15 {
// 			a = a + 1
// 			goto LOOP
// 		}
// 		fmt.Printf("a 的值为 : %d\n", a)
// 		a++
// 	}
// }

// var variable_name [SIZE]variable_type

// var balance [10]float32
// var balance = [5]float32{1000.0, 2.0, 3.4, 7.0, 50.0}

// var balance = []float32{1000.0, 2.0, 3.4, 7.0, 50.0}
// balance[4] = 50.0

// package main

// import "fmt"

// func main() {
// 	var a [4]float32
// 	fmt.Println(a)
// 	var b = [5]string{"ruby", "王二狗", "rose"}
// 	fmt.Println(b)
// 	var c = [5]int{'A', 'B', 'C', 'D', 'E'}
// 	fmt.Println(c)
// 	d := [...]int{1, 2, 3, 4, 5}
// 	fmt.Println(d)
// 	e := [5]int{4: 100}
// 	fmt.Println(e)
// 	f := [...]int{0: 1, 4: 1, 9: 1}
// 	fmt.Println(f)
// }

// float32 salary = balance[9]

// package main

// import "fmt"

// func main() {
// 	var n [10]int
// 	var i, j int

// 	for i = 0; i < 10; i++ {
// 		n[i] = i + 100
// 	}

// 	for j = 0; j < 10; j++ {
// 		fmt.Printf("Element[%d] = %d\n", j, n[j])
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	a := [...]float64{67.7, 89.8, 21, 78}
// 	fmt.Println("length of a is", len(a))
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	a := [...]int{12, 78, 50}
// 	fmt.Println(a)
// }

// package main

// import "fmt"

// func main() {
// 	a := [...]float64{67.7, 89.8, 21, 78}
// 	for i := 0; i < len(a); i++ {
// 		fmt.Printf("%d the element of a is %.2f\n", i, a[i])
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	a := [...]float64{67.7, 89.8, 21, 78}
// 	sum := float64(0)
// 	for i, v := range a {
// 		fmt.Printf("%d the element of a is %.2f\n", i, v)
// 		sum += v
// 	}
// 	fmt.Println("\nsum of all elements of a", sum)
// }

// var variable_name [SIZE1][SIZE2] ... [SIZEN] variable_type
// var threedim[5][10][4] int

// package main

// import "fmt"

// func main() {
// 	// a1 := [3]int{1, 2, 3}
// 	// a2 := [3][4]int{{}, {}, {}}
// 	a2 := [3][4]int{{1, 2, 3, 4}, {5, 6, 7, 8}, {9, 10, 11, 12}}
// 	fmt.Println(a2)
// 	fmt.Printf("二维数组的地址:%p\n", &a2)
// 	fmt.Printf("二维数组的长度:%d\n", len(a2))
// 	fmt.Printf("一位数组的长度:%d\n", len(a2[0]))
// 	fmt.Println(a2[0][3])
// 	fmt.Println(a2[1][2])
// 	fmt.Println(a2[2][1])
// 	for i := 0; i < len(a2); i++ {
// 		for j := 0; j < len(a2[i]); j++ {
// 			fmt.Print(a2[i][j], "\t")
// 		}
// 		fmt.Println()
// 	}
// 	fmt.Println("----------------------------------------")
// 	for _, arr := range a2 {
// 		for _, val := range arr {
// 			fmt.Print(val, "\t")
// 		}
// 		fmt.Println()
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	a := [...]string{"China", "USA", "Germany"}
// 	b := a
// 	b[0] = "Singapore"
// 	fmt.Println("a is ", a)
// 	fmt.Println("b is ", b)
// }

// package main

// func main() {
// 	a := [3]int{5, 78, 8}
// 	var b [5]int
// 	b = a
// }

// var identifier []type

// var slice1 []type = make([]type,len)
// slice1:=make([]type,len)

// make([]T,length,capacity)

// s[0]=1
// s[1]=2
// s[2]=3
// s:=[] int{1,2,3}
// s:=arr[startIndex:endIndex]
// s:=arr[startIndex:]
// s:=arr[:endIndex]

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	a := [5]int{76, 77, 78, 79, 80}
// 	var b []int = a[1:4]
// 	fmt.Println(b)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	darr := [...]int{57, 89, 90, 82, 100, 78, 67, 69, 59}
// 	dslice := darr[2:5]
// 	fmt.Println("array before", darr)
// 	for i := range dslice {
// 		dslice[i]++
// 	}
// 	fmt.Println("array after", darr)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	numa := [3]int{78, 79, 80}
// 	nums1 := numa[:]
// 	nums2 := numa[:]
// 	fmt.Println("array before change 1", numa)
// 	nums1[0] = 100
// 	fmt.Println("array after modification to slice nums1", numa)
// 	nums2[1] = 101
// 	fmt.Println("array after modification to slice nums2", numa)
// }

// package main

// import "fmt"

// func main() {
// 	var numbers = make([]int, 3, 5)
// 	printSlice(numbers)
// }

// func printSlice(x []int) {
// 	fmt.Printf("len=%d cap=%d slice=%v\n", len(x), cap(x), x)
// }

// package main

// import "fmt"

// func main() {
// 	var numbers []int
// 	printSlice(numbers)
// 	if numbers == nil {
// 		fmt.Printf("切片是空的")
// 	}
// }

// func printSlice(x []int) {
// 	fmt.Printf("len=%d cap=%d slice=%v\n", len(x), cap(x), x)
// }

// package main

// import "fmt"

// func main() {
// 	numbers := []int{0, 1, 2, 3, 4, 5, 6, 7, 8}
// 	printSlice(numbers)

// 	fmt.Println("numbers ==", numbers)

// 	fmt.Println("numbers[1:4] ==", numbers[1:4])

// 	fmt.Println("numbers[:3] ==", numbers[:3])

// 	fmt.Println("numbers[4:] ==", numbers[4:])

// 	numbers1 := make([]int, 0, 5)
// 	printSlice(numbers1)

// 	number2 := numbers[:2]
// 	printSlice(number2)

// 	number3 := numbers[2:5]
// 	printSlice(number3)
// }

// func printSlice(x []int) {
// 	fmt.Printf("len=%d cap=%d slice=%v\n", len(x), cap(x), x)
// }

// package main

// import "fmt"

// func main() {
// 	var numbers []int
// 	printSlice(numbers)

// 	numbers = append(numbers, 0)
// 	printSlice(numbers)

// 	numbers = append(numbers, 1)
// 	printSlice(numbers)

// 	numbers = append(numbers, 2, 3, 4)
// 	printSlice(numbers)

// 	numbers1 := make([]int, len(numbers), (cap(numbers))*2)

// 	copy(numbers1, numbers)
// 	printSlice(numbers1)
// }

// func printSlice(x []int) {
// 	fmt.Printf("len=%d cap=%d slice=%v\n", len(x), cap(x), x)
// }

// var map_variable map[key_data_type]value_data_type
// map_variable = make(map[key_data_type]value_data_type)
// rating := map[string]float32{"C": 5, "Go": 4.5, "Python": 4.5, "C++": 2}

// package main

// import "fmt"

// func main() {
// 	var countryCapitalMap map[string]string
// 	countryCapitalMap = make(map[string]string)

// 	countryCapitalMap["France"] = "Paris"
// 	countryCapitalMap["Italy"] = "Rome"
// 	countryCapitalMap["Japan"] = "Tokyo"
// 	countryCapitalMap["India"] = "New Delhi"

// 	for country := range countryCapitalMap {
// 		fmt.Println("Capital of", country, "is", countryCapitalMap[country])
// 	}

// 	captial, ok := countryCapitalMap["United States"]

// 	if ok {
// 		fmt.Println("Capital of United States is", captial)
// 	} else {
// 		fmt.Println("Capital of United States is not present")
// 	}
// }

// package main

// import "fmt"

// func main() {
// 	countryCapitalMap := map[string]string{"France": "Paris", "Italy": "Rome", "Japan": "Tokyo", "India": "New Delhi"}

// 	fmt.Println("原始 map")

// 	for country := range countryCapitalMap {
// 		fmt.Println("Capital of", country, "is", countryCapitalMap[country])
// 	}

// 	delete(countryCapitalMap, "France")
// 	fmt.Println("Entry for France is deleted")
// 	fmt.Println("删除元素后 map")

// 	for country := range countryCapitalMap {
// 		fmt.Println("Capital of", country, "is", countryCapitalMap[country])
// 	}
// }

// value,ok := map[key]

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	m := make(map[string]int)
// 	m["a"] = 1
// 	x, ok := m["b"]
// 	fmt.Println(x, ok)
// 	x, ok = m["a"]
// 	fmt.Println(x, ok)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	personSalary := map[string]int{
// 		"steve": 12000,
// 		"jamie": 15000,
// 	}
// 	personSalary["mike"] = 9000
// 	fmt.Println("Original person salary", personSalary)
// 	newPersonSalary := personSalary
// 	newPersonSalary["mike"] = 18000
// 	fmt.Println("Person salary changed", personSalary)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	name := "Hello World"
// 	fmt.Println(name)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	name := "Hello World"
// 	for i := 0; i < len(name); i++ {
// 		fmt.Printf("%d ", name[i])
// 	}
// 	fmt.Printf("\n")
// 	for i := 0; i < len(name); i++ {
// 		fmt.Printf("%c", name[i])
// 	}
// }

// func funcName(parametername type1, parametername type2) (output1 type1, output2 type2) {
// 	return value1, value2
// }

// package main

// import "fmt"

// func main() {
// 	var a int = 100
// 	var b int = 200
// 	var ret int
// 	ret = max(a, b)
// 	fmt.Printf("最大值是 : %d\n", ret)
// }

// func max(num1, num2 int) int {
// 	var result int
// 	if num1 > num2 {
// 		result = num1
// 	} else {
// 		result = num2
// 	}
// 	return result
// }

// func myfunc(arg ...int) {

// }

// for _, n := range arg {
// 	fmt.Printf("And the number is : %d\n", n)
// }

// package main

// import (
// 	"fmt"
// 	"math"
// )

// func main() {
// 	getSquareRoot := func(x float64) float64 {
// 		return math.Sqrt(x)
// 	}
// 	fmt.Println(getSquareRoot(9))
// }

// package main

// import "fmt"

// func add1(a *int) int {
// 	*a = *a + 1
// 	return *a
// }
// func main() {
// 	x := 3
// 	fmt.Println("x = ", x)
// 	x1 := add1(&x)
// 	fmt.Println("x+1 = ", x1)
// 	fmt.Println("x = ", x)
// }

// package main

// import "fmt"

// func swap(x, y string) (string, string) {
// 	return y, x
// }

// func main() {
// 	a, b := swap("Mahesh", "Kumar")
// 	fmt.Println(a, b)
// }

// func SumAndProduct(A, B int) (add int, Multiplied int) {
// 	add = A + B
// 	Multiplied = A * B
// 	return
// }

// package main

// import (
// 	"fmt"
// )

// func rectProps(length, width float64) (float64, float64) {
// 	var area = length * width
// 	var perimeter = (length + width) * 2
// 	return area, perimeter
// }

// func main() {
// 	area, _ := rectProps(10.8, 5.6)
// 	fmt.Printf("Area %f", area)
// }

// func ReadWrite() bool {
// 	file.Open("file")
// 	defer file.Close()
// 	if failureX {
// 		return false
// 	}
// 	if failureY {
// 		return false
// 	}
// 	return true
// }

// package main

// import "fmt"

// func main() {
// 	a := 1
// 	b := 2
// 	defer fmt.Println(b)
// 	fmt.Println(a)
// }

// package main

// import (
// 	"fmt"
// )

// func finished() {
// 	fmt.Println("Finished finding largest")
// }

// func largest(nums []int) {
// 	fmt.Println("Started finding largest")
// 	max := nums[0]
// 	for _, v := range nums {
// 		if v > max {
// 			max = v
// 		}
// 	}
// 	fmt.Println("Largest number in", nums, "is", max)
// 	defer finished()
// }

// func main() {
// 	nums := []int{78, 109, 2, 563, 300}
// 	largest(nums)
// }

// package main

// import (
// 	"fmt"
// )

// type person struct {
// 	firstName string
// 	lastName  string
// }

// func (p person) fullName() {
// 	fmt.Printf("%s %s", p.firstName, p.lastName)
// }

// func main() {
// 	p := person{
// 		firstName: "John",
// 		lastName:  "Smith",
// 	}
// 	defer p.fullName()
// 	fmt.Printf("welcome ")
// }

// package main

// import (
// 	"fmt"
// )

// func printA(a int) {
// 	fmt.Println("value of a in deferred function", a)
// }
// func main() {
// 	a := 5
// 	defer printA(a)
// 	a = 10
// 	fmt.Println("value of a before deferred function call", a)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	name := "Naveen"
// 	fmt.Printf("Orignal String:%s\n", string(name))
// 	fmt.Printf("Reversed String:")
// 	for _, v := range []rune(name) {
// 		defer fmt.Printf("%c", v)
// 	}
// }

// package main

// import "fmt"

// func main(){
// 	a:=10
// 	a+=5
// 	fmt.Println("a:",a)
// 	b:=[4]int{1,2,3,4}
// 	b[0]=100
// 	for i:=0;i
// 	c = fun1
// 	fmt.Println(c)
// 	fun1(100,200)
// 	c(100,200)
// 	res1 :=fun2
// 	res2 :=fun2(1,2)
// 	fmt.Println(res1)
// 	fmt.Println(res2)

// 	fmt.Println(res1(10,20))
// }

// func fun2(a,b int) int{
// 	return a + b
// }
// func fun1(a,b int){
// 	fmt.Printf("a:%d,b:%d\n",a,b)
// }

// package main

// import "fmt"

// func main() {
// 	fun1()
// 	fun1()
// 	fun2 := fun1
// 	fun2()

// 	func() {
// 		fmt.Println("one1")
// 	}()

// 	fun3 := func() {
// 		fmt.Println("twe2")
// 	}
// 	fun3()
// 	fun3()

// 	func(a, b int) {
// 		fmt.Println(a, b)
// 	}(1, 2)

// 	res1 := func(a, b int) int {
// 		return a + b
// 	}(10, 20)
// 	fmt.Println(res1)

// 	res2 := func(a, b int) int {
// 		return a + b
// 	}
// 	fmt.Println(res2)
// 	fmt.Println(res2(100, 200))
// }

// func fun1() {
// 	fmt.Println("fun1()")
// }

// package main

// import "fmt"

// func main() {
// 	fmt.Printf("%T\n", add)
// 	fmt.Printf("%T\n", oper)

// 	res1 := add(1, 2)
// 	fmt.Println(res1)

// 	res2 := oper(10, 20, add)
// 	fmt.Println(res2)

// 	res3 := oper(5, 2, sub)
// 	fmt.Println(res3)

// 	fun1 := func(a, b int) int {
// 		return a * b
// 	}

// 	res4 := oper(10, 4, fun1)
// 	fmt.Println(res4)

// 	res5 := oper(100, 8, func(a, b int) int {
// 		if b == 0 {
// 			fmt.Println("除数不能为零")
// 			return 0
// 		}
// 		return a / b
// 	})

// 	fmt.Println(res5)
// }

// func oper(a, b int, fun func(int, int) int) int {
// 	fmt.Println(a, b, fun)
// 	res := fun(a, b)
// 	return res
// }

// func add(a, b int) int {
// 	return a + b
// }

// func sub(a, b int) int {
// 	return a - b
// }

// package main

// import "fmt"

// func main() {
// 	res1 := increment()
// 	fmt.Printf("%T\n", res1)
// 	fmt.Println(res1)
// 	v1 := res1()
// 	fmt.Println(v1)
// 	v2 := res1()
// 	fmt.Println(v2)
// 	fmt.Println(res1())
// 	fmt.Println(res1())
// 	fmt.Println(res1())
// 	fmt.Println(res1())

// 	res2 := increment()
// 	fmt.Println(res2)
// 	v3 := res2()
// 	fmt.Println(v3)
// 	fmt.Println(res2())

// 	fmt.Println(res1())
// }

// func increment() func() int {
// 	i := 0
// 	fun := func() int {
// 		i++
// 		return i
// 	}
// 	return fun
// }

// // 获得变量的地址
// package main

// import "fmt"

// func main() {
// 	var a int = 10
// 	fmt.Printf("变量的地址：%x\n", &a)
// }

/*
	指针的声明
*/
// var var_name *var-type
// var ip *int
// var fp *float32
// package main

// import "fmt"

// func main() {
// 	var a int = 20
// 	var ip *int
// 	ip = &a
// 	fmt.Printf("a 的变量的值：%x\n", a)
// 	fmt.Printf("a 的变量的地址是：%x\n", &a)
// 	fmt.Printf("ip 变量的存储地址：%x\n", ip)
// 	fmt.Printf("*ip 变量的值:%d\n", *ip)
// }

// package main

// import "fmt"

// type name int8
// type first struct {
// 	a int
// 	b bool
// 	name
// }

// func main() {
// 	a := new(first)
// 	a.a = 1
// 	a.name = 11
// 	fmt.Println(a.b, a.a, a.name)
// }

// package main

// import "fmt"

// type name int8
// type first struct {
// 	a int
// 	b bool
// 	name
// }

// func main() {
// 	var a = first{1, false, 2}
// 	var b *first = &a
// 	fmt.Println(a.b, a.a, a.name, &a, b.a, &b, (*b).a)
// }

// if (ptr != nil)
// if (ptr == nil)
// package main

// import (
// 	"fmt"
// )

// func main() {
// 	b := 255
// 	a := &b
// 	fmt.Println("address of b is", a)
// 	fmt.Println("value of b is ", *a)
// }

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	b := 255
// 	a := &b
// 	fmt.Println("address of b is", a)
// 	fmt.Println("value of b is", *a)
// 	*a++
// 	fmt.Println("new value of b is", b)
// }

// 使用指针传递函数的参数
// package main

// import (
// 	"fmt"
// )

// func change(val *int) {
// 	*val = 55
// }

// func main() {
// 	a := 58
// 	fmt.Println("value of a before function call is", a)
// 	b := &a
// 	change(b)
// 	fmt.Println("values of a after function call is", a)
// }

// package main

// import (
// 	"fmt"
// )

// func modify(arr *[3]int) {
// 	(*arr)[0] = 90
// }

// func main() {
// 	a := [3]int{89, 90, 91}
// 	modify(&a)
// 	fmt.Println(a)
// }

// package main

// import (
// 	"fmt"
// )

// func modify(arr *[3]int) {
// 	arr[0] = 90
// }

// func main() {
// 	a := [3]int{89, 90, 91}
// 	modify(&a)
// 	fmt.Println(a)
// }

// package main

// import (
// 	"fmt"
// )

// func modify(sls []int) {
// 	sls[0] = 90
// }
// func main() {
// 	a := [3]int{89, 90, 91}
// 	modify(a[:])
// 	fmt.Println(a)
// }

// package main

// import "fmt"

// const MAX int = 3

// func main() {
// 	a := []int{10, 100, 200}
// 	var i int
// 	for i = 0; i < MAX; i++ {
// 		fmt.Printf("a[%d] = %d\n", i, a[i])
// 	}
// }

// package main

// import "fmt"

// const MAX int = 3

// func main() {
// 	a := []int{10, 100, 200}
// 	var i int
// 	var ptr [MAX]*int

// 	for i = 0; i < MAX; i++ {
// 		ptr[i] = &a[i]
// 	}

// 	for i = 0; i < MAX; i++ {
// 		fmt.Printf("a[%d]=%d\n", i, *ptr[i])
// 	}
// }

// var ptr **int
// package main

// import "fmt"

// func main() {
// 	var a int
// 	var ptr *int
// 	var pptr **int

// 	a = 3000
// 	ptr = &a
// 	pptr = &ptr

// 	fmt.Printf("变量 a=%d\n", a)
// 	fmt.Printf("指针变量 *ptr=%d\n", *ptr)
// 	fmt.Printf("指向指针的指针变量 **pptr=%d\n", **pptr)
// }

// package main

// import "fmt"

// func main() {
// 	var a int = 100
// 	var b int = 200

// 	fmt.Printf("交换前 a,b 的值:%d,%d\n", a, b)
// 	swap(&a, &b)

// 	fmt.Printf("交换后 a,b 的值:%d,%d\n", a, b)
// }

// func swap(x *int, y *int) {
// 	*x ^= *y
// 	*y ^= *x
// 	*x ^= *y
// }

// --------------------结构体--------------------
// 结构体的定义和初始化
// type struct_variable_type struct{
// 	member definition
// 	mmeber definition
// }
// variable_name := structure_variable_type{value1,value2,...,valuen}
// 按照顺序提供初始化值
// p := person{"Tom", 25}
// 通过field：value的方式初始化，这样可以任意顺序
// p := person{age: 24, name: "Tom"}
// new方式，未设置初始值的，会赋予类型的默认初始值
// p := new(person)
// p.age = 24

// 结构体的访问
// package main

// import "fmt"

// type Books struct {
// 	title   string
// 	author  string
// 	subject string
// 	book_id int
// }

// func main() {
// 	var Book1 Books
// 	var Book2 Books

// 	Book1.title = "Go语言"
// 	Book1.author = "www.runoob.com"
// 	Book1.subject = "Go 语言教程"
// 	Book1.book_id = 6495407

// 	Book2.title = "Python 语言"
// 	Book2.author = "www.runoob.com"
// 	Book2.subject = "Python 语言教程"
// 	Book2.book_id = 6495700

// 	fmt.Printf("Book 1 title : %s\n", Book1.title)
// 	fmt.Printf("Book 1 author : %s\n", Book1.author)
// 	fmt.Printf("Book 1 subject : %s\n", Book1.subject)
// 	fmt.Printf("Book 1 book_id : %s\n", Book1.book_id)

// 	fmt.Printf("Book 2 title : %s\n", Book2.title)
// 	fmt.Printf("Book 2 author : %s\n", Book2.author)
// 	fmt.Printf("Book 2 subject : %s\n", Book2.subject)
// 	fmt.Printf("Book 2 book_id : %s\n", Book2.book_id)
// }

// var stuct_pointer *Books
// stuct_pointer = &Book1

// package main

// import "fmt"

// type Books struct {
// 	title   string
// 	author  string
// 	subject string
// 	book_id int
// }

// func main() {
// 	var Book1 Books
// 	var Book2 Books

// 	Book1.title = "Go"
// 	Book1.author = "runoob"
// 	Book1.subject = "Go 教程"
// 	Book1.book_id = 6495407

// 	Book2.title = "Python"
// 	Book2.author = "runoob"
// 	Book2.subject = "Python 教程"
// 	Book2.book_id = 6495700

// 	printBook(&Book1)
// 	printBook(&Book2)
// }

// func printBook(book *Books) {
// 	fmt.Printf("Book title : %s\n", book.title)
// 	fmt.Printf("Book author : %s\n", book.author)
// 	fmt.Printf("Book subject : %s\n", book.subject)
// 	fmt.Printf("Book book_id : %d\n", book.book_id)
// }

// package main

// import "fmt"

// type Books struct {
// }

// func (s Books) string() string {
// 	return "date"
// }

// func main() {
// 	fmt.Printf("%v\n", Books{})
// }

// 结构体的匿名字段
// type Human struct {
// 	name   string
// 	age    int
// 	weight int
// }

// type Student struct {
// 	Human
// 	speciality
// }

// func main() {
// 	mark := Student{Human{"Mark", 25, 120}, "Computer Science"}

// 	fmt.Println("His name is ", mark.name)
// 	fmt.Println("His age is ", mark.age)
// 	fmt.Println("His weight is ", mark.weight)
// 	fmt.Println("His speciality is ", mark.speciality)

// 	mark.speciality = "AI"
// 	fmt.Println("Mark changed his speciality")
// 	fmt.Println("His speciality is ", mark.speciality)

// 	fmt.Println("Mark become old")
// 	mark.age = 46
// 	fmt.Println("His age is ", mark.age)

// 	fmt.Println("Mark is not an athlet anymore")
// 	mark.weight += 60
// 	fmt.Println("His weight is ", mark.weight)
// }

// // 嵌套结构
// package main

// import "fmt"

// type Address struct {
// 	city, state string
// }
// type Person struct {
// 	name    string
// 	age     int
// 	address Address
// }

// func main() {
// 	var p Person
// 	p.name = "Naveen"
// 	p.age = 50
// 	p.address = Address{
// 		city:  "Chicago",
// 		state: "Illinois",
// 	}
// 	fmt.Println("Name:", p.name)
// 	fmt.Println("Age:", p.age)
// 	fmt.Println("City:", p.address.city)
// 	fmt.Println("State:", p.address.state)
// }
// package main

// import (
// 	"fmt"
// )

// type Address struct {
// 	city, state string
// }
// type Person struct {
// 	name string
// 	age  int
// 	Address
// }

// func main() {
// 	var p Person
// 	p.name = "Naveen"
// 	p.age = 50
// 	p.Address = Address{
// 		city:  "Chicago",
// 		state: "Illinois",
// 	}
// 	fmt.Println("Name:", p.name)
// 	fmt.Println("Age:", p.age)
// 	fmt.Println("City:", p.city)
// 	fmt.Println("State:", p.state)
// }

// package computer

// type Spec struct {
// 	Maker string
// 	model string
// 	Price int
// }

// package main
// import "struct/computer"
// import "fmt"

// func main(){
// 	var spec computer.Spec
// 	spec.Maker = "apple"
// 	spec.Price = 50000
// 	fmt.Println("Spec:",spec)
// }

// 结构体是值类型
// package main

// import (
// 	"fmt"
// )

// type name struct {
// 	firstName string
// 	lastName  string
// }

// func main() {
// 	name1 := name{"Steve", "Jobs"}
// 	name2 := name{"Steve", "Jobs"}
// 	if name1 == name2 {
// 		fmt.Println("name1 and name2 are equal")
// 	} else {
// 		fmt.Println("name3 and name4 are not equal")
// 	}

// 	name3 := name{firstName: "Steve", lastName: "Jobs"}
// 	name4 := name{}
// 	name4.firstName = "Steve"
// 	if name3 == name4 {
// 		fmt.Println("name3 and name4 are equal")
// 	} else {
// 		fmt.Println("name3 and name4 are not equal")
// 	}
// }

// package main

// import (
// 	"fmt"
// )

// type image struct {
// 	data map[int]int
// }

// func main() {
// 	image1 := image{data: map[int]int{
// 		0: 155,
// 	}}
// 	fmt.Println(image1)
// 	image2 := image{data: map[int]int{
// 		0: 155,
// 	}}
// 	fmt.Println(image2)
// 	if image1 == image2 {
// 		fmt.Println("image1 equal image2")
// 	}
// }

// 结构体作为函数参数使用
// package main

// import "fmt"

// type Books struct {
// 	title   string
// 	author  string
// 	subject string
// 	book_id int
// }

// func main() {
// 	var Book1 Books
// 	var Book2 Books

// 	Book1.title = "Go"
// 	Book1.author = "runoob"
// 	Book1.subject = "Go test"
// 	Book1.book_id = 407

// 	Book2.title = "Python"
// 	Book2.author = "runoob"
// 	Book2.subject = "Python test"
// 	Book2.book_id = 700

// 	PrintBook(Book1)

// 	PrintBook(Book2)
// }

// func PrintBook(book Books) {
// 	fmt.Printf("Book title : %s\n", book.title)
// 	fmt.Printf("Book author : %s\n", book.author)
// 	fmt.Printf("Book subject : %s\n", book.subject)
// 	fmt.Printf("Book book_id : %d\n", book.book_id)
// }

// 语法
// func (t type) methodName(parameter list)(return list){
// }
// func funcName(parameter list)(return list){
// }
// package main

// import (
// 	"fmt"
// )

// type Employee struct {
// 	name     string
// 	salary   int
// 	currency string
// }

// func (e Employee) displaySalary() {
// 	fmt.Printf("Salary of %s is %s%d", e.name, e.currency, e.salary)
// }

// func main() {
// 	emp1 := Employee{
// 		name:     "Sam Adolf",
// 		salary:   5000,
// 		currency: "$",
// 	}
// 	emp1.displaySalary()
// }

// package main

// import (
// 	"fmt"
// 	"math"
// )

// type Rectangle struct {
// 	width, height float64
// }
// type Circle struct {
// 	radius float64
// }

// func (r Rectangle) area() float64 {
// 	return r.width * r.height
// }
// func (c Circle) area() float64 {
// 	return c.radius * c.radius * math.Pi
// }
// func main() {
// 	r1 := Rectangle{12, 2}
// 	r2 := Rectangle{9, 4}
// 	c1 := Circle{10}
// 	c2 := Circle{25}
// 	fmt.Println("Area of r1 is :", r1.area())
// 	fmt.Println("Area of r2 is :", r2.area())
// 	fmt.Println("Area of c1 is :", c1.area())
// 	fmt.Println("Area of c2 is :", c2.area())
// }

// package main

// import (
// 	"fmt"
// )

// type Employee struct {
// 	name     string
// 	salary   int
// 	currency string
// }

// func displaySalary(e Employee) {
// 	fmt.Printf("Salary of %s is %s%d", e.name, e.currency, e.salary)
// }

// func main() {
// 	emp1 := Employee{
// 		name:     "Sam Adolf",
// 		salary:   5000,
// 		currency: "$",
// 	}
// 	displaySalary(emp1)
// }

// package main

// import "fmt"

// var g int

// func main() {
// 	var a, b int
// 	a = 10
// 	b = 20
// 	g = a + b

// 	fmt.Printf("结果：a=%d,b=%d and g=%d\n", a, b, g)
// }

// func (b *Box) SetColor(c Color) {
// 	b.color = c
// }

// package main

// import (
// 	"fmt"
// )

// type Rectangle struct {
// 	width, height int
// }

// func (r *Rectangle) setValue() {
// 	r.height = 20
// }

// func main() {
// 	p := Rectangle{1, 2}
// 	s := p
// 	p.setValue()
// 	fmt.Println(p.height, s.height)
// }

// method集成
// package main

// import "fmt"

// type Human struct {
// 	name  string
// 	age   int
// 	phone string
// }
// type Student struct {
// 	Human
// 	school string
// }
// type Employee struct {
// 	Human
// 	company string
// }

// func (h Human) SayHi() {
// 	fmt.Printf("Hi,I'm %s you can call me on %s\n", h.name, h.phone)
// }
// func main() {
// 	mark := Student{Human{"Mark", 25, "222-222-YYYY"}, "MIT"}
// 	sam := Employee{Human{"Sam", 45, "111-888-XXXX"}, "Golang Inc"}
// 	mark.SayHi()
// 	sam.SayHi()
// }

// method 重写
// package main

// import "fmt"

// type Human struct {
// 	name  string
// 	age   int
// 	phone string
// }
// type Student struct {
// 	Human
// 	school string
// }
// type Employee struct {
// 	Human
// 	company string
// }

// func (h *Human) SayHi() {
// 	fmt.Printf("Hi,I'm %s you can call me on %s\n", h.name, h.phone)
// }

// func (e *Employee) SayHi() {
// 	fmt.Printf("Hi,I'm %s,I work at %s. Call me on %s\n", e.name, e.company, e.phone)
// }

// func main() {
// 	mark := Student{Human{"Mark", 25, "222-222-YYYY"}, "MIT"}
// 	sam := Employee{Human{"Sam", 45, "111-888-xxxx"}, "Golang Inc"}
// 	mark.SayHi()
// 	sam.SayHi()
// }
// type interface_name interface{
// 	method_name1 [return_type]
// 	method_name2 [return_type]
// 	method_name3 [return_type]
// 	...
// 	method_namen [return_type]
// }

// type struct_name struct{

// }
// func (struct_name_variable struct_name) method_name1() [return_type]{}

// package main

// import (
// 	"fmt"
// )

// type Phone interface {
// 	call()
// }
// type NokiaPhone struct{}

// func (nokiaPhone NokiaPhone) call() {
// 	fmt.Println("I'm Nokia,I can call you!")
// }

// type IPhone struct{}

// func (iPhone IPhone) call() {
// 	fmt.Println("I'm iPhone,I can call you!")
// }
// func main() {
// 	var phone Phone
// 	phone = new(NokiaPhone)
// 	phone.call()
// 	phone = new(IPhone)
// 	phone.call()
// }

// interface值
// package main

// import "fmt"

// type Human struct {
// 	name  string
// 	age   int
// 	phone string
// }
// type Student struct {
// 	Human
// 	school string
// 	loan   float32
// }
// type Employee struct {
// 	Human
// 	company string
// 	loan    float32
// }

// func (h Human) SayHi() {
// 	fmt.Printf("Hi I'm %s you can call me on %s\n", h.name, h.phone)
// }
// func (h Human) Sing(lyrics string) {
// 	fmt.Println("La la la la ...", lyrics)
// }
// func (e Employee) SayHi() {
// 	fmt.Printf("Hi,I am %s,I work at %s. Call me on %s\n", e.name, e.company, e.phone)
// }

// type Men interface {
// 	SayHi()
// 	Sing(lyrics string)
// }

// func main() {
// 	mike := Student{Human{"Mike", 25, "222-222-XXX"}, "MIT", 0.00}
// 	paul := Student{Human{"Paul", 26, "111-222-XXX"}, "Harvard", 100}
// 	sam := Employee{Human{"Sam", 36, "444-222-XXX"}, "Golang Inc.", 1000}
// 	Tom := Employee{Human{"Sam", 36, "444-222-XXX"}, "Things Ltd.", 5000}

// 	var i Men
// 	i = mike
// 	fmt.Println("This is Mike,a Student:")
// 	i.SayHi()
// 	i.Sing("November rain")
// 	i = Tom
// 	fmt.Println("This is Tom,an Employee:")
// 	i.SayHi()
// 	i.Sing("Born to be wild")
// 	fmt.Println("Let's use a slice of Men and see what happens")
// 	x := make([]Men, 3)
// 	x[0], x[1], x[2] = paul, sam, mike
// 	for _, value := range x {
// 		value.SayHi()
// 	}
// }

// package main

// import "fmt"

// type Human interface {
// 	Len()
// }
// type Student interface {
// 	Human
// }
// type Test struct {
// }

// func (h *Test) Len() {
// 	fmt.Println("succ")
// }
// func main() {
// 	var s Student
// 	s = new(Test)
// 	s.Len()
// }

// package test
// import ("fmt")
// type Controller struct{
// 	M int32
// }
// type Something interface{
// 	Get()
// 	Post()
// }
// func (c *Controller) Get(){
// 	fmt.Print("GET")
// }
// func (c *Controller) Post(){
// 	fmt.Print("POST")
// }

// package main

// import (
// 	"fmt"
// 	"test"
// )

// type T struct {
// 	test.Controller
// }

// func (t *T) Get() {
// 	fmt.Print("T")
// }
// func (t *T) Post() {
// 	fmt.Print("T")
// }
// func main() {
// 	var something test.Something
// 	something = new(T)
// 	var t T
// 	t.M = 1
// 	something.Get()
// }

// package main

// import "fmt"

// func main() {
// 	var i1 interface{} = new(Student)
// 	s := i1.(Student)

// 	fmt.Println(s)
// 	var i2 interface{} = new(Student)
// 	s, ok := i2.(Student)
// 	switch ins := s.(type) {
// 	case Triangle:
// 		fmt.Println("三角形...", ins.a, ins.b, ins.c)
// 	case Circle:
// 		fmt.Println("圆形.....", ins.radius)
// 	case int:
// 		fmt.Println("整型数据..")
// 	}

// }

// type person struct {
// 	name string
// 	age  int
// }

// type USB interface {
// 	start()
// 	end()
// }

// package main

// import "fmt"

// type myint int
// type mystr string

// func main() {
// 	var i1 myint
// 	var i2 = 100
// 	i1 = 100
// 	fmt.Println(i1)
// 	fmt.Println(i1, i2)
// 	var name mystr
// 	name = "王二狗"
// 	var s1 string
// 	s1 = "李晓华"
// 	fmt.Println(name)
// 	fmt.Println(s1)
// 	name = s1
// }

// package main

// import (
// 	"fmt"
// 	"strconv"
// )

// func main() {
// 	res1 := fun1()
// 	fmt.Println(res1(10, 20))
// }

// type my_fun func(int, int) string

// func fun1() my_fun {
// 	fun := func(a, b int) string {
// 		s := strconv.Itoa(a) + strconv.Itoa(b)
// 		return s
// 	}
// 	return fun
// }

// type 别名 = Type

// type byte uint8
// type rune int32

// type byte = uint8
// type rune = int32

// package main

// import (
// 	"fmt"
// )

// func main() {
// 	var i1 myint
// 	var i2 = 100
// 	i1 = 100
// 	fmt.Println(i1)
// 	var i3 myint2
// 	i3 = i2
// 	fmt.Println(i1, i2, i3)
// }

// type myint int
// type myint2 = int

// package main

// import (
// 	"time"
// )

// type MyDuration = time.Duration

// func (m MyDuration) EasySet(a string) {

// }
// func main() {}

// type MyDuration time.Duration

// package main

// import (
// 	"fmt"
// )

// type Person struct {
// 	name string
// }

// func (p Person) Show() {
// 	fmt.Println("Person-->", p.name)
// }

// type People = Person

// type Student struct {
// 	Person
// 	People
// }

// func (p People) Show2() {
// 	fmt.Println("People-->", p.name)
// }

// func main() {
// 	var s Student
// 	s.People.name = "lxl"
// 	s.Person.name = "weg"
// 	s.Person.Show()
// 	s.People.Show2()
// 	fmt.Printf("%T,%T\n", s.Person, s.People)
// }

// package main

// import (
// 	"fmt"
// 	"os"
// )

// func main() {
// 	f, err := os.Open("/test.txt")
// 	if err != nil {
// 		fmt.Println(err)
// 		return
// 	}
// 	fmt.Println(f.Name(), "opened successfully")
// }

// type error interface{
// 	Error() string
// }

// open test.txt : No such file or directory

// type PathError struct {
// 	Op   string
// 	Path string
// 	Err  error
// }

// func (e *PathError) Error() string {
// 	return e.Op + " " + e.Path + ": " + e.Err.Error()
// }

// package main

// import (
// 	"fmt"
// 	"os"
// )

// func main() {
// 	f, err := os.Open("/test.txt")
// 	if err, ok := err.(*os.PathError); ok {
// 		fmt.Println("File at path", err.Path, "failed to open")
// 		return
// 	}
// 	fmt.Println(f.Name(), "opened successfully")
// }

// package main

// import (
// 	"fmt"
// 	"net"
// )

// func main() {
// 	// addr, err := net.LookupHost("golangbot123.com")
// 	addr, err := net.LookupHost("www.baidu.com")
// 	if err, ok := err.(*net.DNSError); ok {
// 		if err.Timeout() {
// 			fmt.Println("operation timed out")
// 		} else if err.Temporary() {
// 			fmt.Println("temporary error")
// 		} else {
// 			fmt.Println("generic error: ", err)
// 		}
// 		return
// 	}
// 	fmt.Println(addr)
// }

// var ErrBadPattern = errors.New(syntax error in pattern)
// package main

// import (
// 	"fmt"
// 	"path/filepath"
// )

// func main() {
// 	files, error := filepath.Glob("[")
// 	if error != nil && error == filepath.ErrBadPattern {
// 		fmt.Println(error)
// 		return
// 	}
// 	fmt.Println("matched files", files)
// }

// package main

// import (
// 	"fmt"
// 	"path/filepath"
// )

// func main() {
// 	files, _ := filepath.Glob("[")
// 	fmt.Println("matched files", files)
// }

// func New(text string) error{}

// func Error(format string,a ...interface{}) error{}

// package errors

// func New(text string) error {
// 	return &errorString{text}
// }

// type errorString struct {
// 	s string
// }

// func (e *errorString) Error() string {
// 	return e.s
// }

// package main

// import (
// 	"errors"
// 	"fmt"
// 	"math"
// )

// func circleArea(radius float64) (float64, error) {
// 	if radius < 0 {
// 		return 0, errors.New("Area calculation failed,radius is less than zero")
// 	}
// 	return math.Pi * radius * radius, nil
// }
// func main() {
// 	radius := 20.0
// 	area, err := circleArea(radius)
// 	if err != nil {
// 		fmt.Println(err)
// 		return
// 	}
// 	fmt.Printf("Area of circle %0.2f", area)
// }

// package main

// import (
// 	"fmt"
// 	"math"
// )

// func circleArea(radius float64) (float64, error) {
// 	if radius < 0 {
// 		return 0, fmt.Errorf("Area calculation failed,radius %0.2f is less than zero", radius)
// 	}
// 	return math.Pi * radius * radius, nil
// }

// func main() {
// 	radius := -20.0
// 	area, err := circleArea(radius)
// 	if err != nil {
// 		fmt.Println(err)
// 		return
// 	}
// 	fmt.Printf("Area of circle %0.2f", area)
// }

// type areaError struct {
// 	err    string
// 	radius float64
// }

// func (e *areaError) Error() string {
// 	return fmt.Sprintf("radius %0.2f: %s", e.radius, e.err)
// }

// package main

// import (
// 	"fmt"
// 	"math"
// )

// type areaError struct {
// 	err    string
// 	radius float64
// }

// func (e *areaError) Error() string {
// 	return fmt.Sprintf("radius %0.2f: %s", e.radius, e.err)
// }

// func circleArea(radius float64) (float64, error) {
// 	if radius < 0 {
// 		return 0, &areaError{"radius is negative", radius}
// 	}
// 	return math.Pi * radius * radius, nil
// }

// func main() {
// 	radius := -20.0
// 	area, err := circleArea(radius)
// 	if err != nil {
// 		if err, ok := err.(*areaError); ok {
// 			fmt.Printf("Radius %0.2f is less than zero", err.radius)
// 			return
// 		}
// 		fmt.Println(err)
// 		return
// 	}
// 	fmt.Printf("Area of circle %0.2f", area)
// }

// package main

// import (
// 	"fmt"
// )

// type areaError struct {
// 	err    string
// 	length float64
// 	width  float64
// }

// func (e *areaError) Error() string {
// 	return e.err
// }

// func (e *areaError) lengthNegative() bool {
// 	return e.length < 0
// }

// func (e *areaError) widthNegative() bool {
// 	return e.width < 0
// }

// func rectArea(length, width float64) (float64, error) {
// 	err := ""
// 	if length < 0 {
// 		err += "length is less than zero"
// 	}
// 	if width < 0 {
// 		if err == "" {
// 			err = "width is less than zero"
// 		} else {
// 			err += ",width is less than zero"
// 		}
// 	}
// 	if err != "" {
// 		return 0, &areaError{err, length, width}
// 	}
// 	return length * width, nil
// }

// func main() {
// 	length, width := -5.0, -9.0
// 	area, err := rectArea(length, width)
// 	if err != nil {
// 		if err, ok := err.(*areaError); ok {
// 			if err.lengthNegative() {
// 				fmt.Printf("error: length %0.2f is less than zero\n", err.length)
// 			}
// 			if err.widthNegative() {
// 				fmt.Printf("error: width %0.2f is less than zero\n", err.width)
// 			}
// 		}
// 		fmt.Println(err)
// 		return
// 	}
// 	fmt.Println("area of rect", area)
// }

// func (self *AgentContext) CheckHostType(host_type string) error {
// 	switch host_type {
// 	case "virtual_machine":
// 		return nil
// 	case "bare_metail":
// 		return nil
// 	}
// 	return errors.New("CheckHostType ERROR:" + host_type)
// }

// func (self *AgentContext) IsValidHostType(hostType string) bool {
// 	return hostType == "virtual_machine" || hostType == "bare_metal"
// }

// func (self *CniParam) setTenantId() error {
// 	self.TenantId = self.PodNs
// 	return nil
// }

// err := self.setTenantId()
// if err != nil{
// 	return errors.New()
// }

// func (self *CniParam) setTenantId(){
// 	self.TenantId = self.PodNs
// }

// self.setTenantId()

// resp, err := http.Get(url)
// if err != nil {
// 	return nill, err
// }

// value, ok := cache.Lookup(key)
// if !ok {

// }

// var ERR_EOF = errors.New("EOF")
// var ERR_CLOSED_PIPE = errors.New("io: read/write on closed pipe")
// var ERR_NO_PROGRESS = errors.New("multiple Read calls return no data or error")
// var ERR_SHORT_BUFFER = errors.New("short buffer")
// var ERR_SHORT_WRITE = errors.New("short write")
// var ERR_UNEXPECTED_EOF = errors.New("unexpected EOF")

// func deferDemo() error {
// 	err := createResource1()
// 	if err != nil {
// 		return ERR_CREATE_RESOURCE1_FAILED
// 	}

// 	err = createResource2()
// 	if err != nil {
// 		destroyResource1()
// 		return ERR_CREATE_RESOURCE2_FAILED
// 	}

// 	err = createResource3()
// 	if err != nil {
// 		destroyResource1()
// 		destroyResource2()
// 		return ERR_CREATE_RESOURCE3_FAILED
// 	}

// 	err = createResource4()
// 	if err != nil {
// 		destroyResource1()
// 		destroyResource2()
// 		destroyResource3()
// 		return ERR_CREATE_RESOURCE4_FAILED
// 	}

// 	return nil
// }

// func deferDemo() error {
// 	err := createResource1()
// 	if err != nil {
// 		return ERR_CREATE_RESOURCE1_FAILED
// 	}
// 	defer func() {
// 		if err != nil {
// 			destroyResource1()
// 		}
// 	}()

// 	err = createResource2()
// 	if err != nil {
// 		return ERR_CREATE_RESOURCE2_FAILED
// 	}
// 	defer func() {
// 		if err != nil {
// 			destroyResource2()
// 		}
// 	}()

// 	err = createResource3()
// 	if err != nil {
// 		return ERR_CREATE_RESOURCE3_FAILED
// 	}
// 	defer func() {
// 		if err != nil {
// 			destroyResource3()
// 		}
// 	}()

// 	err = createResource4()
// 	if err != nil {
// 		return ERR_CREATE_RESOURCE4_FAILED
// 	}
// 	return nil
// }

// package main

// import (
// 	"errors"
// 	"fmt"
// 	"runtime/debug"
// )

// func funcA() error {
// 	defer func() {
// 		if p := recover(); p != nil {
// 			fmt.Printf("panic recover! p:%v", p)
// 			debug.PrintStack()
// 		}
// 	}()
// 	return funcB()
// }

// func funcA() (err error) {
// 	defer func() {
// 		if p := recover(); p != nil {
// 			fmt.Println("panic recover! p:", p)
// 			str, ok := p.(string)
// 			if ok {
// 				err = errors.New(str)
// 			} else {
// 				err = errors.New("panic")
// 			}
// 			debug.PrintStack()
// 		}
// 	}()
// 	return funcB()
// }

// func funcB() error {
// 	panic("foo")
// 	return errors.New("success")
// }

// func main() {
// 	err := funcA()
// 	if err == nil {
// 		fmt.Printf("err is nil\\n")
// 	} else {
// 		fmt.Printf("err is %v\\n", err)
// 	}
// }

// switch s := suit(drawCard()); s {
// case "Spades":
// case "Hearts":
// case "Diamonds":
// case "Clubs":
// default:
// 	panic(fmt.Sprintf("invalid suit %v", s))
// }

// func MustCompile(str string) *Regexp{
// 	regexp,error:=Compile(str)
// 	if error != nil{
// 		panic(regexp:Compile(+quote(str)+):+error.Error())
// 	}
// 	return regexp
// }
// ip:47.103.72.17|172.19.73.156
// 账号:sa
// 端口:1438
// 密码:Ztj123456

// package main

// import "fmt"

// func main() {
// 	var strArr [66]string

// 	strArr[1] = "myblog"
// 	strArr[2] = "    L----conf"
// 	strArr[3] = "        L----app.conf"
// 	strArr[4] = "    L----controllers"
// 	strArr[5] = "        L----aboutme_controller.go"
// 	strArr[6] = "        L----add_article_controller.go"
// 	strArr[7] = "        L----album_controller.go"
// 	strArr[8] = "        L----base_controller.go"
// 	strArr[9] = "        L----default.go"
// 	strArr[10] = "        L----delete_article_controller.go"
// 	strArr[11] = "        L----exit_controller.go"
// 	strArr[12] = "        L----home_controller.go"
// 	strArr[13] = "        L----login_controller.go"
// 	strArr[14] = "        L----register_controller.go"
// 	strArr[15] = "        L----show_article_controller.go"
// 	strArr[16] = "        L----tags_controller.go"
// 	strArr[17] = "        L----update_article_controller.go"
// 	strArr[18] = "        L----upload_controller.go"
// 	strArr[19] = "    L----main.go"
// 	strArr[20] = "    L----models"
// 	strArr[21] = "        L----album.go"
// 	strArr[22] = "        L----article_model.go"
// 	strArr[23] = "        L----home_model.go"
// 	strArr[24] = "        L----tags_model.go"
// 	strArr[25] = "        L----user_model.go"
// 	strArr[26] = "    L----myblogweb"
// 	strArr[27] = "    L----routers"
// 	strArr[28] = "        L----router.go"
// 	strArr[29] = "    L----static"
// 	strArr[30] = "        L----css"
// 	strArr[31] = "            L----blogsheet.css"
// 	strArr[32] = "            L----lib"
// 	strArr[33] = "                L----highlight.css"
// 	strArr[34] = "                L----login.css"
// 	strArr[35] = "        L----img"
// 	strArr[36] = "        L----js"
// 	strArr[37] = "            L----blog.js"
// 	strArr[38] = "            L----lib"
// 	strArr[39] = "                L----jquery-3.3.1.min.js"
// 	strArr[40] = "                L----jquery.url.js"
// 	strArr[41] = "            L----reload.min.js"
// 	strArr[42] = "        L----upload"
// 	strArr[43] = "            L----img"
// 	strArr[44] = "                L----2021"
// 	strArr[45] = "                    L----10"
// 	strArr[46] = "                        L----27"
// 	strArr[47] = "                            L----1544511378-bee2.png"
// 	strArr[48] = "    L----tests"
// 	strArr[49] = "            L----default_test.go"
// 	strArr[50] = "    L----utils"
// 	strArr[51] = "            L----myUtils.go"
// 	strArr[52] = "            L----mysqlUtils.go"
// 	strArr[53] = "    L----views"
// 	strArr[54] = "            L----aboultme.html"
// 	strArr[55] = "            L----album.html"
// 	strArr[56] = "            L----block"
// 	strArr[57] = "                L----home_block.html"
// 	strArr[58] = "                L----nav.html"
// 	strArr[59] = "            L----home.html"
// 	strArr[60] = "            L----index.html"
// 	strArr[61] = "            L----login.html"
// 	strArr[62] = "            L----register.html"
// 	strArr[63] = "            L----show_article.html"
// 	strArr[64] = "            L----tags.html"
// 	strArr[65] = "            L----write_article.html"

// 	var i int
// 	for i = 1; i < 66; i++ {
// 		fmt.Println(strArr[i])
// 	}
// }

// import "package"
// import (
// 	"package1"
// 	"package2"
// )

// src userPackage tool.go
// package userPackage
// import "fmt"
// func init(){
// 	fmt.Println("tool init")
// }

// src main.go

// package main
// import (
// 	"userPackage"
// )

// func main(){
// 	fmt.Println("main run")
// 	userPackage.SomeFunc()
// }

// import (
// 	"database/sql"
// 	_"github.com/ziutek/mymysql/godrv"
// )

// go get github.com/go-sql-driver/mysql

// func Now() Time

// func Date(year int,month Month,day,hour,min,sec,nsec int,loc *Location) Time

// func (t Time) Format(layout string) string

// func Parse(layout,value string)(Time,error)

// func (t Time) Unix() int64

// func (t Time) UnixNano() int64

// func (t Time) Year() int
// func (t Time) Month() Month
// func (t Time) Day() int
// func (t Time) Hour() int
// func (t Time) Minute() int
// func (t Time) Second() int

// func (t Time) Date() (year int,month Month,day int)

// func Sleep(d Duration)

// package main

// import (
// 	"fmt"
// 	"math/rand"
// 	"time"
// )

// func main() {
// 	t1 := time.Now()
// 	fmt.Printf("%T\n", t1)
// 	fmt.Println(t1)

// 	t2 := time.Date(2008, 7, 15, 16, 30, 28, 0, time.Local)
// 	fmt.Println(t2)

// 	s1 := t1.Format("2006年1月2日 15：04：05")
// 	fmt.Println(s1)

// 	s2 := t1.Format("2006-01-02")
// 	fmt.Println(s2)

// 	s3 := "1999年10月10日"
// 	t3, err := time.Parse("2006年1月2日", s3)
// 	if err != nil {
// 		fmt.Println("err:", err.Error())
// 	}
// 	fmt.Println(t3)

// 	t4 := time.Date(1970, 1, 1, 1, 0, 0, 0, time.UTC)
// 	timeStamp1 := t4.Unix()
// 	fmt.Println(timeStamp1)
// 	timeStamp2 := t1.Unix()
// 	fmt.Println(timeStamp2)
// 	timeStamp3 := t4.UnixNano()
// 	fmt.Println(timeStamp3)
// 	timeStamp4 := t1.UnixNano()
// 	fmt.Println(timeStamp4)

// 	year, month, day := t1.Date()
// 	fmt.Println(year, month, day)
// 	hour, min, sec := t1.Clock()
// 	fmt.Println(hour, min, sec)

// 	year2 := t1.Year()
// 	fmt.Println("年: ", year2)
// 	fmt.Println(t1.YearDay())
// 	month2 := t1.Month()
// 	fmt.Println("月: ", month2)
// 	fmt.Println("日: ", t1.Day())
// 	fmt.Println("小时: ", t1.Hour())
// 	fmt.Println("分钟: ", t1.Minute())
// 	fmt.Println("秒: ", t1.Second())
// 	fmt.Println(t1.Weekday())
// 	fmt.Println(t1.ISOWeek())

// 	t5 := t1.Add(time.Minute)
// 	fmt.Println(t1)
// 	fmt.Println(t5)
// 	fmt.Println(t1.Add(24 * time.Hour))

// 	t6 := t1.AddDate(1, 0, 0)
// 	fmt.Println(t6)
// 	fmt.Println(t1.Add(-5 * time.Minute))

// 	d1 := t5.Sub(t1)
// 	fmt.Printf("%T\n", d1)
// 	fmt.Println(d1)

// 	time.Sleep(3 * time.Second)
// 	fmt.Println("mai...over...")

// 	rand.Seed(time.Now().UnixNano())
// 	randNum := rand.Intn(10) + 1
// 	fmt.Println(randNum)
// 	time.Sleep(time.Duration(randNum) * time.Second)
// 	fmt.Println("睡醒了...")
// }

// type FileInfo interface {
// 	Name() string
// 	Size() int64
// 	Mode() FileMode
// 	ModeTime() time.Time
// 	IsDir() bool
// 	Sys() interface{}
// }

// const (
// 	O_RDONLY int = syscall.O_RDONLY
// 	O_WRONLY int = syscall.O_WRONLY
// 	O_RDWR   int = syscall.O_RDWR
// 	O_APPEND int = syscall.O_APPEND
// 	O_CREATE int = syscall.CREAT
// 	O_EXCL   int = syscall.EXCL
// 	O_SYNC   int = syscall.O_SYNC
// 	O_TRUNC  int = syscall.O_TRUNC
// )

// type File
// //File代表一个打开的文件对象。

// func Create(name string)(file *File,err error)
// //Create采用模式0666（任何人都可读写，不可执行）创建一个名为name的文件，如果文件已存在会截断它（为空文件）。如果成功，返回的文件对象可用于I/O；对应的文件描述符具有O_RDWR模式。如果出错，错误底层类型是*PathError。

// func Open(name string)(file *Filem,err error)
// //Open打开一个文件用于读取。如果操作成功，返回的文件对象的方法可用于读取数据；对应的文件描述符具有O_RDONLY模式。如果出错，错误底层类型是*PathError。

// func OpenFile(name string,flag int,perm FileMode)(file *File,err error)
// //OpenFile是一个更一般性的文件打开函数，大多数调用者都应用Open或Create代替本函数。它会使用指定的选项（如O_RDONLY等）、指定的模式（如0666等）打开指定名称的文件。如果操作成功，返回的文件对象可用于I/O。如果出错，错误底层类型是*PathError。

// func NewFile(fd uintptr, name string) *File
// //NewFile使用给出的Unix文件描述符和名称创建一个文件。

// func Pipe()(r *File, w *File, err error)
// //Pipe返回一对关联的文件对象。从r的读取将返回写入w的数据。本函数会返回两个文件对象和可能的错误。

// func (f *File) Name() string
// //Name方法返回（提供给Open/Create等方法的）文件名称。

// func (f *File) Stat() (fi FileInfo, err error)
// //Stat返回描述文件f的FileInfo类型值。如果出错，错误底层类型是*PathError。

// func (f *File) Fd() uintptr
// //Fd返回与文件f对应的整数类型的Unix文件描述符。

// func (f *File) Chdir() error
// //Chdir将当前工作目录修改为f，f必须是一个目录。如果出错，错误底层类型是*PathError。

// func (f *File) Chmod(mode FileMode) error
// //Chmod修改文件的模式。如果出错，错误底层类型是*PathError。

// func (f *File) Chown(uid, gid int) error
// //Chown修改文件的用户ID和组ID。如果出错，错误底层类型是*PathError。

// func (f *File) Close() error
// //Close关闭文件f，使文件不能用于读写。它返回可能出现的错误。

// func (f *File) Readdir(n int) (fi []FileInfo, err error)
// //Readdir读取目录f的内容，返回一个有n个成员的[]FileInfo，这些FileInfo是被Lstat返回的，采用目录顺序。对本函数的下一次调用会返回上一次调用剩余未读取的内容的信息。如果n>0，Readdir函数会返回一个最多n个成员的切片。这时，如果Readdir返回一个空切片，它会返回一个非nil的错误说明原因。如果到达了目录f的结尾，返回值err会是io.EOF。如果n<=0，Readdir函数返回目录中剩余所有文件对象的FileInfo构成的切片。此时，如果Readdir调用成功（读取所有内容直到结尾），它会返回该切片和nil的错误值。如果在到达结尾前遇到错误，会返回之前成功读取的FileInfo构成的切片和该错误。

// func (f *File) Readdirnames(n int) (names []string, err error)
// //Readdir读取目录f的内容，返回一个有n个成员的[]string，切片成员为目录中文件对象的名字，采用目录顺序。对本函数的下一次调用会返回上一次调用剩余未读取的内容的信息。如果n>0，Readdir函数会返回一个最多n个成员的切片。这时，如果Readdir返回一个空切片，它会返回一个非nil的错误说明原因。如果到达了目录f的结尾，返回值err会是io.EOF。如果n<=0，Readdir函数返回目录中剩余所有文件对象的名字构成的切片。此时，如果Readdir调用成功（读取所有内容直到结尾），它会返回该切片和nil的错误值。如果在到达结尾前遇到错误，会返回之前成功读取的名字构成的切片和该错误。

// func (f *File) Truncate(size int64) error
// //Truncate改变文件的大小，它不会改变I/O的当前位置。 如果截断文件，多出的部分就会被丢弃。如果出错，错误底层类型是*PathError。

// package main

// import (
// 	"fmt"
// 	"os"
// )

// func main() {
// 	fileInfo, err := os.Stat("/Users/ruby/Documents/pro/a/aa.txt")
// 	if err != nil {
// 		fmt.Println("err :", err)
// 		return
// 	}
// 	fmt.Printf("%T\n", fileInfo)
// 	fmt.Println(fileInfo.Name())
// 	fmt.Println(fileInfo.Size())
// 	fmt.Println(fileInfo.IsDir())
// 	fmt.Println(fileInfo.ModTime())
// 	fmt.Println(fileInfo.Mode())
// }

// 文件操作过程示例
// package main

// import (
// 	"fmt"
// 	"os"
// 	"path"
// 	"path/filepath"
// )

// func main() {
// 	fileName1 := "/Users/ruby/Documents/pro/a/aa.txt"
// 	fileName2 := "bb.txt"
// 	fmt.Println(filepath.IsAbs(fileName1))
// 	fmt.Println(filepath.IsAbs(fileName2))
// 	fmt.Println(filepath.Abs(fileName1))
// 	fmt.Println(filepath.Abs(fileName2))
// 	fmt.Println("获取父目录: ", path.Join(fileName1, ".."))

// 	err := os.Mkdir("/Users/ruby/Documents/pro/a/bb", os.ModePerm)
// 	if err != nil {
// 		fmt.Println("err:", err)
// 		return
// 	}
// 	fmt.Println("文件夹创建成功。。")
// 	err1 := os.MkdirAll("/Users/ruby/Documents/pro/a/cc/dd/ee", os.ModePerm)
// 	if err1 != nil {
// 		fmt.Println("err:", err1)
// 		return
// 	}
// 	fmt.Println("多层文件夹创建成功")

// 	file1, err2 := os.Create("/Users/ruby/Documents/pro/a/ab.txt")
// 	if err2 != nil {
// 		fmt.Println("err:", err2)
// 		return
// 	}
// 	fmt.Println(file1)
// 	file2, err3 := os.Create(fileName2)
// 	if err3 != nil {
// 		fmt.Println("err:", err3)
// 		return
// 	}
// 	fmt.Println(file2)

// 	file3, err4 := os.Open(fileName1)
// 	if err4 != nil {
// 		fmt.Println("err:", err4)
// 		return
// 	}
// 	fmt.Println(file3)

// 	err5 := os.RemoveAll("/Users/ruby/Documents/pro/a/cc")
// 	if err != nil {
// 		fmt.Println("err:", err5)
// 		return
// 	}
// 	fmt.Println("删除目录成功")
// }

// type Reader interface {
// 	Read(p []byte) (n int, err error)
// }

// Read 将 len(p) 个字节读取到 p 中。它返回读取的字节数 n（0 <= n <= len(p)）以及任何遇到的错误。即使 Read 返回的 n < len(p)，它也会在调用过程中使用 p的全部作为暂存空间。若一些数据可用但不到 len(p) 个字节，Read 会照例返回可用的东西，而不是等待更多。

// 当 Read 在成功读取 n > 0 个字节后遇到一个错误或 EOF 情况，它就会返回读取的字节数。它会从相同的调用中返回（非nil的）错误或从随后的调用中返回错误（和 n == 0）。这种一般情况的一个例子就是 Reader 在输入流结束时会返回一个非零的字节数，可能的返回不是 err == EOF 就是 err == nil。无论如何，下一个 Read 都应当返回 0, EOF。

// 调用者应当总在考虑到错误 err 前处理 n > 0 的字节。这样做可以在读取一些字节，以及允许的 EOF 行为后正确地处理I/O错误。

// Read 的实现会阻止返回零字节的计数和一个 nil 错误，调用者应将这种情况视作空操作。

// type ReaderFrom interface{
// 	ReadFrom(r Reader)(n int64, err error)
// }

// type ReaderAt interface {
// 	ReadAt(p []byte, off int64) (n int, err error)
// }

// ReadAt 从对象数据流的 off 处读出数据到 p 中
//     忽略数据的读写指针，从数据的起始位置偏移 off 处开始读取
//     如果对象的数据流只有部分可用，不足以填满 p
//     则 ReadAt 将等待所有数据可用之后，继续向 p 中写入
//     直到将 p 填满后再返回
//     在这点上 ReadAt 要比 Read 更严格
//     返回读取的字节数 n 和读取时遇到的错误
//     如果 n < len(p)，则需要返回一个 err 值来说明
//     为什么没有将 p 填满（比如 EOF）
//     如果 n = len(p)，而且对象的数据没有全部读完，则
//     err 将返回 nil
//     如果 n = len(p)，而且对象的数据刚好全部读完，则
//     err 将返回 EOF 或者 nil（不确定）

// func (f *File) Read(b []byte) (n int, err error)
//Read方法从f中读取最多len(b)字节数据并写入b。它返回读取的字节数和可能遇到的任何错误。文件终止标志是读取0个字节且返回值err为io.EOF。

// func (f *File) ReadAt(b []byte, off int64) (n int, err error)
//ReadAt从指定的位置（相对于文件开始位置）读取len(b)字节数据并写入b。它返回读取的字节数和可能遇到的任何错误。当n小于len(b)时，本方法总是会返回错误；如果是因为到达文件结尾，返回值err会是io.EOF。

// package main

// import (
// 	"fmt"
// 	"io"
// 	"os"
// )

// func main() {
// 	fileName := "/Users/ruby/Documents/pro/a/aa.txt"
// 	file, err := os.Open(fileName)
// 	if err != nil {
// 		fmt.Println("err:", err)
// 		return
// 	}
// 	defer file.Close()

// 	bs := make([]byte, 4, 4)

// 	n, err := file.Read(bs)
// 	fmt.Println(err)
// 	fmt.Println(n)
// 	fmt.Println(bs)
// 	fmt.Println(string(bs))

// 	n, err = file.Read(bs)
// 	fmt.Println(err)
// 	fmt.Println(n)
// 	fmt.Println(bs)
// 	fmt.Println(string(bs))

// 	n, err = file.Read(bs)
// 	fmt.Println(err)
// 	fmt.Println(n)
// 	fmt.Println(bs)
// 	fmt.Println(string(bs))

// 	n, err = file.Read(bs)
// 	fmt.Println(err)
// 	fmt.Println(n)

// 	m := -1
// 	for {
// 		m, err = file.Read(bs)
// 		if m == 0 || err == io.EOF {
// 			fmt.Println("读取到了文件的末尾，结束读取操作。。")
// 			break
// 		}
// 		fmt.Println(string(bs[:n]))
// 	}
// }

// type Write interface {
// 	Write(p []byte) (n int, err error)
// }

// type Seeker interface {
// 	Seek(offset int64, whence int) (int64, error)
// }

// type WriterTo interface {
// 	WriteTo(w Writer) (n int64, err error)
// }

// type WriteAt interface {
// 	WriteAt(p []byte, off int64) (n int, err error)
// }

// func (f *File) Write(b []byte) (n int, err error)
//Write向文件中写入len(b)字节数据。它返回写入的字节数和可能遇到的任何错误。如果返回值n!=len(b)，本方法会返回一个非nil的错误。

// func (f *File) WriteString(s string) (ret int, err error)
//WriteString类似Write，但接受一个字符串参数。

// func (f *File) WriteAt(b []byte,off int64)(n int,err error)
//WriteAt在指定的位置（相对于文件开始位置）写入len(b)字节数据。它返回写入的字节数和可能遇到的任何错误。如果返回值n!=len(b)，本方法会返回一个非nil的错误。

// func (f *File) Seek(offset int64,whence int)(ret int64,err error)
//Seek设置下一次读/写的位置。offset为相对偏移量，而whence决定相对位置：0为相对文件开头，1为相对当前位置，2为相对文件结尾。它返回新的偏移量（相对开头）和可能的错误。

// func (f *File) Sync() (err error)
//Sync递交文件的当前内容进行稳定的存储。一般来说，这表示将文件系统的最近写入的数据在内存中的拷贝刷新到硬盘中稳定保存。

// package main

// import (
// 	"fmt"
// 	"log"
// 	"os"
// )

// func main() {
// 	fileName := "/Users/ruby/Documents/pro/a/ab.txt"
// 	file, err := os.OpenFile(fileName, os.O_CREATE|os.O_WRONLY|os.O_APPEND, os.ModePerm)
// 	if err != nil {
// 		fmt.Println(err)
// 		return
// 	}
// 	defer file.Close()

// 	// 写出数据
// 	bs := []byte{97, 98, 99, 100}
// 	n, err := file.Write(bs[:2])
// 	fmt.Println(n)
// 	HandleErr(err)
// 	file.WriteString("\n")

// 	// 直接写出字符串
// 	n, err = file.WriteString("HelloWorld")
// 	fmt.Println(n)
// 	HandleErr(err)

// 	file.WriteString("\n")
// 	n, err = file.Write([]byte("today"))
// 	fmt.Println(n)
// 	HandleErr(err)
// }

// func HandleErr(err error) {
// 	if err != nil {
// 		log.Fatal(err)
// 	}
// }

// io包下的Read()和Write()方法实现
// 我们可以通过io包下的Read()和Write()方法，边读边写，就能够实现文件的复制。这个方法是按块读取文件，块的大小也会影响到程序的性能。

// func copyFile1(srcFile, destFile string) (int, error) {
// 	file1, err := os.Open(srcFile)
// 	if err != nil {
// 		return 0, err
// 	}
// 	file2, err := os.OpenFile(destFile, os.O_WRONLY|os.O_CREATE, os.ModePerm)
// 	if err != nil {
// 		return 0, err
// 	}
// 	defer file1.Close()
// 	defer file2.Close()
// 	bs := make([]byte, 1024, 1024)
// 	b := -1
// 	total := 0
// 	for {
// 		n, err = file1.Read(bs)
// 		if err = io.EOF || n == 0{
// 			fmt.Println("拷贝完毕。。")
// 			break
// 		}else if err != nil{
// 			fmt.Println("报错了。。。")
// 			return total,err
// 		}
// 		total += n
// 		file2.Write(bs[:n])
// 	}
// 	return total,nil
// }

// // io包下的Copy()方法实现
// func copyFile2(srcFile,destFile string)(int64,error){
// 	file1,err := os.Open(srcFile)
// 	if err != nil{
// 		return 0,err
// 	}
// 	file2,err := os.OpenFile(destFile,os.O_WRONLY|os.O_CREATE,os.ModePerm)
// 	if err!=nil{
// 		return 0,err
// 	}
// 	defer file1.Close()
// 	defer file2.Close()
// 	bs := make([]byte,1024,1024)
// 	n :=-1
// 	total :=0
// 	for{
// 		n,err = file.Read(bs)
// 		if err == io.EOF || n==0{
// 			fmt.Println("拷贝完毕。。")
// 			break
// 		}else if err != nil{
// 			fmt.Println("报错了。。。")
// 			return total,err
// 		}
// 		total += n
// 		file2.Write(bs[:n])
// 	}
// 	return total,nil
// }

// // io包下的Copy()方法实现
// func copyFile2(srcFile,destFile string)(int64,error){
// 	file1,err :=os.Open(srcFile)
// 	if err != nil{
// 		return 0,err
// 	}
// 	file2,err := os.OpenFile(destFile,os.O_WRONLY|os.O_CREATE,os.ModePerm)
// 	if err != nil{
// 		return 0,err
// 	}
// 	defer file1.Close()
// 	defer file2.Close()
// 	return io.Copy(file2,file1)
// }

// Copy(dst,src) 为复制src 全部到dst中。
// CopyN(dst,scr,n)为复制src中n个字节到dst
// CopyBuffer(dst,src,buf)为指定一个buff缓存区,以这个大小完全复制。

// func copyBuffer(dst Writer,src Reader,buf []byte)(written int64,err error){
// 	if wt,ok := src.(WriterTo);ok{
// 		return wt.WriteTo(dst)
// 	}
// 	if buf == nil{
// 		size := 32 * 1024
// 		if l,ok := src.(*LimitedReader); ok && int64(size) > l.N{
// 			if l,N < 1{
// 				size = 1
// 			}else{
// 				size = int(l.N)
// 			}
// 		}
// 		buf = make([]byte,size)
// 	}
// 	for{
// 		nr,er := src.Read(buf)
// 		if nr > 0 {
// 			nw,ew := dst.Write(buf[0:nr])
// 			if nw >0{
// 				written += int64(nw)
// 			}
// 			if ew != nil{
// 				err = ew
// 				break
// 			}
// 			if nr != nw{
// 				err = ErrShortWrite
// 				break
// 			}
// 		}
// 		if er != nil{
// 			if er != EOF{
// 				err = er
// 			}
// 			break
// 		}
// 	}
// 	return written,err
// }

// if buf == nil{
// 	size := 32 *1024
// 	if l,ok := src.(*LimitedReader);ok && int64(size) > l.N{
// 		if l.N<1{
// 			size = 1
// 		}else{
// 			size = int(l.N)
// 		}
// 	}
// 	buf = make([]byte,size)
// }

// // iout包
// func copyFile3(srcFile,destFile string)(int,error){
// 	input,err:=ioutil.ReadFile(srcFile)
// 	if err != nil{
// 		fmt.Println(err)
// 		return 0,err
// 	}

// 	err = ioutil.WriteFile(destFile,input,0644)
// 	if err != nil{
// 		fmt.Println("操作失败",destFile)
// 		fmt.Println(err)
// 		return 0,err
// 	}

// 	return len(input),nil
// }

// func main(){
// 	srcFile := "/Users/ruby/Documents/pro/a/001_小程序入门.mp4"
// 	destFile := "001_小程序入门.mp4"
// 	total,err :=copyFile1(srcFile,destFile)
// 	fmt.Println(err)
// 	fmt.Println(total)
// }

// type Seeker interface{
// 	Seek(offset int64,whence int)(int64,error)
// }

// const(
// 	SeekStart = 0
// 	SeekCurrent = 1
// 	SeekEnd = 2
// )

// package main
// import(
// 	"os"
// 	"fmt"
// 	"io"
// )
// func main(){
// 	file,_:=os.OpenFile("/Users/ruby/Documents/pro/a/aa.txt",os.O_RDWR,0)
// 	defer file.Close()
// 	bs := []byte{0}

// 	file.Read(bs)
// 	fmt.Println(string(bs))

// 	file.Seek(4,io.SeekStart)
// 	file.Read(bs)
// 	fmt.Println(string(bs))
// 	file.Seek(2,0)
// 	file.Read(bs)
// 	fmt.Println(string(bs))

// 	file.Seek(3,io.SeekCurrent)
// 	file.Read(bs)
// 	fmt.Println(string(bs))

// 	file.Seek(0,io.SeekEnd)
// 	file.WriteString("ABC")
// }

// package main

// import(
// 	"fmt"
// 	"os"
// 	"strconv"
// 	"io"
// )

// func main(){
// 	srcFile := "/Users/ruby/Documents/pro/a/guliang.jpeg"
// 	destFile :="guliang4.jpeg"
// 	tempFile := destFile + "temp.txt"
// 	// fmt.Println(tempFile)
// 	file1,_:=os.Open(srcFile)
// 	file2,_:=os.OpenFile(destFile,os.O_CREATE|os.O_WRONLY,os.ModePerm)
// 	file3,_:=os.OpenFile(tempFile,os.O_CREATE|os.O_RDWR,os.ModePerm)

// 	defer file1.Close()
// 	defer file2.Close()
// 	// 1.读取临时文件中的数据，根据seek
// 	file3.Seek(0,io.SeekStart)
// 	bs:=make([]byte,100,100)
// 	n1,err:=file3.Read(bs)
// 	fmt.Println(n1)
// 	countStr := string(bs[:n1])
// 	fmt.Println(countStr)
// 	// count,_:=strconv.Atoi(countStr)
// 	count,_:=strconv.ParseInt(countStr,10,64)
// 	fmt.Println(count)

// 	// 2.设置读，写的偏移量
// 	file1.Seek(count,0)
// 	file2.Seek(count,0)
// 	data:=make([]byte,1024,1024)
// 	n2:=-1
// 	n3:=-1
// 	total := int(count)

// 	for{
// 		// 3.读取数据
// 		n2,err = file1.Read(data)
// 		if err == io.EOF{
// 			fmt.Println("文件复制完毕")
// 			file3.Close()
// 			os.Remove(tempFile)
// 			break
// 		}
// 		// 将数据写入到目标文件
// 		n3,_=file2.Write(data[:n2])
// 		total += n3
// 		// 将复制总量，存储到临时文件中
// 		file3.Seek(0,io.SeekStart)
// 		file3.WriteString(strconv.Itoa(total))

// 		// 假装断电
// 		if total>8000{
// 			panic("假装断电了。。。假装的。。。")
// 		}
// 	}
// }

// // bufio.Reader 是 bufio中对io.Reader的封装
// type Reader struct{
// 	buf 		[]byte
// 	rd 			io.Reader
// 	r,w 		int
// 	err 		error
// 	lastByte	int
// 	lastRunSize int
// }

// func (b *Reader ) Read(p []byte)(n int,err error){
// 	n = len(p)
// 	if n == 0{
// 		return 0,b.readErr()
// 	}
// 	if b,r == b.w{
// 		if b.err != nil{
// 			return 0,b.readErr()
// 		}
// 		if len(p) >= len(b.buf){
// 			n,b.err = b.rd.Read(p)
// 			if n < 0{
// 				panic(errNegativeRead)
// 			}
// 			if n>0{
// 				b.lastByte = int(p[n-1])
// 				b.lastRunSize = -1
// 			}
// 			return n,b.readErr()
// 		}
// 		b.r = 0
// 		b.w = 0
// 		n,b.err = b.rd.Read(b.buf)
// 		if n<0{
// 			panic(errNegativeRead)
// 		}
// 		if n==0{
// 			return 0,b.readErr()
// 		}
// 		b.w += n
// 	}
// 	n = copy(p,b.buf[b.r:b.w])
// 	b.r += n
// 	b.lastByte = int(b.buf[b.r-1])
// 	b.lastRuneSize = -1
// 	return n,nil
// }

// // bufio.Writer是bufio中对io.Writer的封装
// type Writer struct{
// 	err error
// 	buf []byte
// 	n int
// 	wr io.Writer
// }
// /*
// bufio.Write(p []byte)的思路如下
// 1、判断buf中可用容量是否放下p
// 2、如果能放下，直接把p拼接到buf后面，即把内容放到缓冲区
// 3、如果缓冲区的可用容量不足以放下，且此时缓冲区是空的，直接把p写入文件即可
// 4、如果缓冲区的可用容量不足以放下，且此时缓冲区有内容，则用p把缓冲区填满，把缓冲区所有内容写入文件，并清空缓冲区
// 5、判断p的剩余内容大小能否放到缓冲区，如果能放下（此时和步骤1情况一样）则把内容放到缓冲区
// 6、如果p的剩余内容依旧大于缓冲区，（注意此时缓冲区是空的，情况和步骤3一样）则把p的剩余内容直接写入文件
// */
// func (b *Writer) Write(p []byte)(nn int,err error){
// 	for len(p) > b.Available() && b.err == nil {
// 		var n int
// 		if b.Buffered() == 0{
// 			n,b.err = b.wr.Write(p)
// 		}else{
// 			n = copy(b.buf[b.n:],p)
// 			b.n+= n
// 			b.Flush()
// 		}
// 		nn += n
// 		p = p[n:]
// 	}
// 	if b.err != nil{
// 		return nn,b.err
// 	}
// 	n:= copy(b.buf[b.n:],p)
// 	b.n+=n
// 	nn+=n
// 	return nn,nil
// }
// /*
// b.wr 存储的是一个io.writer对象,实现了Write()的接口,所以可以使用b.wr.Write(p)将p的内容写入文件。
// b.flush()会将缓存区内容写入文件,当所有写入完成后，因为缓存区会存储内容，所以需要手动flush()到文件。
// b.Available()为buf可用容量，等于len(buf)-n。

// bufio包

// bufio包实现了有缓冲的I/O。它包装一个io.Reader或io.Writer接口对象,创建另一个也实现了该接口，且同时还提供了缓冲和一些文本I/O的帮助函数和对象
// bufio.Reader:
// bufio.Reader实现了如下接口:
// io.Reader
// io.WriterTo
// io.ByteScanner
// io.RuneScanner
// */

// /*
// NewReaderSize 将 rd 封装成一个带缓存的 bufio.Reader 对象
// 缓存大小由 size 指定（如果小于16则会被设置为16）
// 如果 rd 的基类型就是有足够缓存的 bufio.Reader 类型,则直接将 rd 转换为基类型返回
// */
// func NewReaderSize(rd io.Reader,size int) *Reader

// // NewReader 相当于 NewReaderSize（rd,4096）
// func NewReader(rd io.Reader) *Reader

// /*
// Peek 返回缓存的一个切片，该切片引用缓存中前n个字节的数据，
// 该操作不会讲数据读出，只是引用，引用的数据在下一次读取操作之前是有效的。如果切片长度小于n，则返回一个错误信息说明原因。
// 如果n大于缓存的总大小，则返回ErrBufferFull。
// */
// func (b *Reader) Peek(n int)([] byte,error)

// /*
// Read 从b中读出数据到p中，返回读出的字节数和遇到的错误。
// 如果缓存不为空，则只能读出缓存中的数据，不会从底层io.Reader中提取数据,如果缓存为空，则：
// 1、len(p) >= 缓存大小，则跳过缓存，直接从底层io.Reader 中读出到 p 中。
// 2、len(p) <= 缓存大小，则先将数据从底层 io.Reader中读取到缓存中，再从缓存读取到p中。
// */
// func (b *Reader) Read(p []byte)(n int,err error)

// // Buffered 返回缓存中未读取的数据的长度
// func (b *Reader) Buffered()int

// // ReadBytes 功能同 ReadSlice,只不过返回的是缓存的拷贝
// func (b *Reader) ReadBytes(delim byte)(line []byte,err error)

// // ReadString 功能同 ReadBytes,只不过返回的是字符串
// func (b *Reader) ReadString(delim byte)(line string,err error)

// /*
// bufio.Writer:
// bufio.Writer 实现了如下接口:
// io.Writer
// io.ReaderFrom
// io.ByteWriter
// */

// /*
// NewWriterSize 将 wr 封装成一个带缓存的 bufio.Writer 对象,
// 缓存大小由 size 指定（如果小于 4096 则会被设置为 4096）。
// 如果 wr 的基类型就是有足够缓存的 bufio.Writer 类型，则直接将 wr 转换为 基类型返回。
// */
// func NewWriterSize(wr io.Writer,size int) *Writer

// // NewWriter 相当于 NewWriterSize(wr,4096)
// func NewWriter(wr io.Writer) *Writer

// // WriteString 功能同 Write，只不过写入的是字符串
// func (b *Writer) WriteString(s string)(int,err error)

// // WriteRune 向 b 写入 r 的 UTF-8 编码，返回 r 的编码长度。
// func (b *Writer) WriteRune(r rune)(size int,err error)

// // Flush 将缓存中的数据提交到底层的 io.Writer 中
// func (b *Writer) Flush() error

// // Available 返回缓存中未使用的空间的长度
// func (b *Writer) Available() int

// // Buffered 返回缓存中未提交的数据的长度
// func (b *Writer) Buffered() int

// // Reset 将 b 的底层 Writer 重新指定为 w，同时丢弃缓存中的所有数据，复位
// // 所有标记和错误信息。相当于创建一个新的 bufio.Writer。
// func (b *Writer) Reset(w io.Writer)

// package main

// import (
// 	"os",
// 	"fmt",
// 	"bufio"
// )

// func main(){
// 	fileName := "/Users/ruby/Documents/pro/a/english.txt"
// 	file,err := os.Open(fileName)
// 	if err != nil{
// 		fmt.Println(err)
// 		return
// 	}
// 	defer file.Close()

// 	// 创建Reader对象
// 	b1 := bufio.NewReader(file)
// 	// 1.Read()，高效读取
// 	p := make([]byte,1024)
// 	n1,err := b1.Read(p)
// 	fmt.Println(n1)
// 	fmt.Println(string(p[:n1]))

// 	// 2.ReadLine()
// 	data,flag,err := b1.ReadLine()
// 	fmt.Println(flag)
// 	fmt.Println(err)
// 	fmt.Println(data)
// 	fmt.Println(string(data))

// 	// 3.ReadString()
// 	s1,err := b1.ReadString('\n')
// 	fmt.Println(err)
// 	fmt.Println(s1)

// 	s1,err = b1.ReadString('\n')
// 	fmt.Println(err)
// 	fmt.Println(s1)

// 	s1,err = b1.ReadString('\n')
// 	fmt.Println(err)
// 	fmt.Println(s1)

// 	for{
// 		s1,err := b1.ReadString('\n')
// 		if err == io.EOF{
// 			fmt.Println("读取完毕。。")
// 			break
// 		}
// 		fmt.Println(s1)
// 	}

// 	// 4.ReadBytes()
// 	data,err := b1.ReadBytes('\n')
// 	fmt.Println(err)
// 	fmt.Println(string(data))

// 	// Scanner
// 	// s2 := ""
// 	// fmt.Scanln(&s2)
// 	// fmt.Println(s2)

// 	b2 := bufio.NewReader(os.Stdin)
// 	s2,_ := b2.ReadString('\n')
// 	fmt.Println(s2)
// }

// package main

// import(
// 	"os"
// 	"fmt"
// 	"bufio"
// )
// func main(){
// 	bufio:高效io读写
// 		buffer缓存
// 		io:input/output
// 	将io包下的Reader，Write对象进行包装，带缓存的包装，提高读写的效率
// 		func (b *Writer) Write(p []byte)(nn int,err error)
// 		func (b *Writer) WriteByte(c byte) error
// 		func (b *Writer) WriteRune(r rune)(size int, err error)
// 		func (b *Writer) WriteString(s string)(int, error)

// 	fileName := "/Users/ruby/Documents/pro/a/cc.txt"
// 	file,err := os.OpenFile(fileName,os.O_CREATE|os.O_WRONLY,os.ModePerm)
// 	if err != nil{
// 		fmt.Println(err)
// 		return
// 	}
// 	defer file.Close()

// 	w1 := bufio.NewWriter(file)
// 	n,err := w1.WriteString("HelloWorld")
// 	fmt.Println(err)
// 	fmt.Println(n)
// 	w1.Flush()

// 	for i:=1;i<=1000;i++{
// 		w1.WriteString(fmt.Sprintf("%d:hello",i))
// 	}
// 	w1.Flush()
// }

// // ioutil包
// // 除了io包可以读写数据，Go语言中还提供了一个辅助的工具包就是ioutil,里面的方法虽然不多，但是都还蛮好用的。
// import "io/ioutil"
// // 该包的介绍只有一句话：Package ioutil implements some I/O utility functions。

// // ioutil包的方法
// // Discard 是一个 io.Writer 接口，调用它的 Write 方法将不做任何事情
// // 并且始终成功返回
// var Discard io.Writer = devNull(0)

// // ReadAll 读取 r 中的所有数据，返回读取的数据和遇到的错误。
// // 如果读取成功，则 err 返回 nil，而不是 EOF，因为 ReadAll 定义为读取所有数据，所以不会把 EOF 当做错误处理。
// func ReadAll(r io.Reader)([]byte,error)

// // ReadFile 读取文件中的所有数据，返回读取的数据和遇到的错误。
// // 如果读取成功，则 err 返回 nil，而不是 EOF
// func ReadFile(filename string)([]byte,error)

// // WriteFile 向文件中写入数据，写入前会清空文件。
// // 如果文件不存在，则会以指定的权限创建该文件。
// // 返回遇到的错误。
// func WriteFile(filename string, data []byte, perm os.FileMode) error

// // ReadDir 读取指定目录中的所有目录和文件（不包括子目录）。
// // 返回读取到的文件信息列表和遇到的错误，列表是经过排序的。
// func ReadDir(dirname string)([]os.FileInfo,error)

// // NopCloser 将 r 包装为一个 ReadCloser 类型，但 Close 方法不做任何事情。
// func NopCloser(r io.Reader) io.ReadCloser

// // TempFile 在 dir 目录中创建一个以 prefix 为前缀的临时文件，并将其以读写模式打开。
// // 返回创建的文件对象和遇到的错误。
// // 如果 dir 为空，则在默认的临时目录中创建文件（参见 os.TempDir）,多次
// // 调用会创建不同的临时文件，调用者可以通过 f.Name() 获取文件的完整路径。
// // 调用本函数所创建的临时文件，应该由调用者自己删除。
// func TempFile(dir,prefix string)(f *os.File,err error)

// // TempDir 功能同 TempFile,只不过创建的是目录，返回目录的完整路径。
// func TempDir(dir,prefix string)(name string,err error)

// package main
// import (
// 	"io/ioutil"
// 	"fmt"
// 	"os"
// )

// func main(){
// 	ioutil包：
// 		ReadFile()
// 		WriteFile()
// 		ReadDir()

// 	// 1.读取文件中的所有的数据
// 	fileName1 := "/Users/ruby/Documents/pro/a/aa.txt"
// 	data,err := ioutil.ReadFile(fileName1)
// 	fmt.Println(err)
// 	fmt.Println(string(data))

// 	// 2.写出数据
// 	fileName2 := "/Users/ruby/Documents/pro/a/bbb.txt"
// 	s1 := "HellWorld面朝大海春暖花开"
// 	err := ioutil.WriteFile(fileName2,[]byte(s1),0777)
// 	fmt.Println(err)

// 	// 3.
// 	s2 := "qwertyuiopsdfghjklzxcvbnm"
// 	r1 := string.NewReader(s2)
// 	data,_ :=ioutil.ReadAll(r1)
// 	fmt.Println(data)

// 	// 4.ReadDir(),读取一个目录下的子目录；子文件和子目录，但是仅有一层
// 	dirName := "/Users/ruby/Documents/pro/a"
// 	fileInfos,_ :=ioutil.ReadDir(dirName)
// 	fmt.Println(len(fileInfos))
// 	for i:=0;i
// }

// // 遍历文件夹
// // 学习io之后，尤其是文件操作，我们就可以遍历给定的目录文件夹了。可以使用ioutil包下的readDir()方法，这个方法可以获取指定目录下的内容，返回文件和子目录。
// // 因为文件夹下还有子文件夹，而ioutil包的ReadDir()只能获取一层目录，所以我们需要自己去设计计算法来实现，最容易实现的思路就是使用递归。
// package main

// import (
// 	"io/ioutil"
// 	"fmt"
// 	"log"
// )
// func main(){
// 	// 遍历文件夹
// 	dirname := "/Users/ruby/Documents/pro"
// 	listFiles(dirname,0)
// }
// func listFiles(dirname string,level int){
// 	// level用来记录当前递归的层次
// 	// 生成有层次感的空格
// 	s := "|--"
// 	for i := 0;i<level;i++{
// 		s = "|  "+s
// 	}
// 	fileInfos,err := ioutil.ReadDir(dirname)
// 	if err != nil{
// 		log.Fatal(err)
// 	}
// 	for _,fi := range fileInfos{
// 		filename := dirname + "/" + fi.Name()
// 		fmt.Printf("%s%s\n",s,filename)
// 		if fi.IsDir(){
// 			// 继续遍历fi这个目录
// 			listFiles(filename,level+1)
// 		}
// 	}
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 并发编程介绍
// 在本章节中，我们将介绍一下，什么是并发编程，什么是并行、并发、串行。Go语言如何实现并发编程，以及实现的原理，goroutine的使用。runtime包、sync包的介绍。channel通道的使用，以及缓冲通道，定向通道。select语句，time包中和并行编程相关的函数介绍。最后我们介绍一下CSP模型。

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 并行性 Concurrency
// 1.1多任务
// 怎么理解多任务呢？其实就是指我们的操作系统可以同时执行多个任务。举个例子，你一边听音乐，一边刷微博，一边聊QQ，一边用Markdown写作业，这就是多任务，至少同时有4个任务正在运行。还有很多任务悄悄地在后台同时运行着，只是界面上没有显示而已。
// CPU的速度太快啦。。。
// 1.2什么是并发
// Go语言是并发语言，而不是并行语言。在讨论如何在Go中进行并发处理之前，我们首先必须了解什么是并发，以及它与并行性有什么不同。（Go is a concurrent language and not a parallel one.）
// 并行性Concurrency是同时处理许多事情的能力。
// 举个例子，假设一个人在晨跑。在晨跑时，他的鞋带松了。现在这个人停止跑步，系鞋带，然后又开始跑步。这是一个典型的并发性示例。这个人能够同时处理跑步和系鞋带，这是一个人能同时处理很多事情。
// 什么是并行性parallelism，它与并发concurrency有什么不同？
// 并行就是同时做很多事情。这听起来可能与并发类似，但实际上是不同的。
// 让我们用同样的慢跑例子更好地理解它。在这种情况下，我们假设这个人正在慢跑，并且使用他的手机听音乐。在这种情况下，一个人一边慢跑一边听音乐，那就是他同时在做很多事情。这就是所谓的并行性（parallelism）。
// 并发性和并行性————一种技术上的观点。
// 假设我们正在编写一个web浏览器。web浏览器有各种组件。其中俩个是web页面呈现区域和下载文件从internet下载的下载器。假设我们以这样的方式构建了浏览器的代码，这样每个组件都可以单独地执行。当这个浏览器运行在单个核处理器中时，处理器将在浏览器的俩个组件之间进行上下文切换。它可能会下载一个文件一段时间，然后它可能会切换到呈现用户请求的网页的html。这就是所谓的并发性。并发进程从不同的时间点开始，它们的执行周期重叠。在这种情况下，下载和呈现从不同的时间点开始，他们的执行重叠。
// 假设同一浏览器运行在多核处理器上。在这种情况下，文件下载组件和HTML呈现组件可能同时在不同的内核中运行。这就是所谓的并行性。
// 并行性Parallelism不会总是导致更快的执行时间。这是因为并行运行的组件可能需要相互通信。例如，在我们的浏览器中，当文件下载完成时，应该将其传递给用户，比如使用弹出窗口。这种通信发生在负责下载的组件和负责呈现用户界面的组件之间。这种通信开销在并发concurrent系统中很低。当组件在多个内核中并行concurrent运行时，这种通信开销很高。因此，并行程序并不总是导致更快的执行时间！
// 1.3进程、线程、协程
// 进程（Process）、线程（Thread）、协程（Coroutine，也叫轻量级线程）
// 进程
// 进程是一个程序在一个数据集中的一次动态执行过程，可以简单理解为“正在执行的程序”，它是CPU资源分配和调度的独立单元。
// 进程一般由程序、数据集、进程控制块三部分组成。我们编写的程序用来描述进程要完成哪些功能以及如何完成；数据集则是程序在执行过程中所需要使用的资源；进程控制块用来记录进程的外部特征，描述进程的执行变化过程，系统可以利用它来控制和管理进程，它是系统感知进程存在的唯一标志。进程的局限是创建、撤销和切换的开销较大。
// 线程
// 线程是在进程之后发展出来的概念。线程也叫轻量级进程，它是一个基本的CPU执行单元，也是程序执行过程中的最小单元，由线程ID、程序计数器、寄存器集合和堆栈共同组成。一个进程可以包含多个线程。
// 线程的优点是减小了程序并发执行时的开销，提高了操作系统的并发性能，缺点是线程没有自己的系统资源，只拥有在运行时必不可少的资源，但同一进程的各线程可以共享进程所拥有的系统资源，如果把进程比作一个车间，那么线程就好比是车间里面的工人。不过对于某些独占性资源存在锁机制，处理不当可能会产生“死锁”。
// 协程
// 协程是一种用户态的轻量级线程，又成微线程，英文名Coroutine，协程的调度完全由用户控制。人们通常将协程和子程序（函数）比较这理解。
// 子程序调用总是一个入口，一次返回，一旦退出即完成了子程序的执行。
// 与传统的系统级线程和进程相比，协程的最大优势在于其“轻量级”，可以轻松创建上百万个而不会导致系统资源衰竭，而线程和进程通常最多也不能超过1万的。这也是协程也叫轻量级线程的原因。
// 协程与多线程相比，其优势体现在：协程的执行效率高。因为子程序切换不是线程切换，而是由程序自身控制，因此，没有线程切换的开销，和多线程比，线程数量越多，协程的性能优势就约明显。
// Go语言对于并发的实现是靠协程，Goroutine

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// Go语言的协程————Goroutine
// 进程
// 进程是一个程序在一个数据集中的一次动态执行过程，可以简单理解为“正在执行的程序”，它是CPU资源分配和调度的独立单元。
// 进程一般由程序、数据集、进程控制块三部分组成。我们编写的程序用来描述进程要完成哪些功能以及如何完成；数据集则是程序在执行过程中所需要使用的资源；进程块控制用来记录进程的外部特征，描述进程的执行变化过程。系统可以利用它来控制和管理进程，它是系统感知进程存在的唯一标志。进程的局限是创建、撤销和切换的花销比较大。
// 线程
// 线程是在进程之后发展出来的概念。线程也叫轻量级进程，它是一个基本的CPU执行单元，也是程序执行过程中的最小单元，由线程ID、程序计数器、寄存器集合和堆栈共同组成。一个进程可以包含过个线程。
// 线程的优点是减小了程序并发执行时的开销，提高了操作系统的并发性能，缺点是线程没有自己的系统资源，只拥有在运行时必不可少的资源，但同一进程的各线程可以共享进程所拥有的系统资源，如果把进程比作一个车间，那么线程就好比是车间里面的工人。不过对于某些独占性资源存在锁机制，处理不当可能会产生“死锁”。
// 协程
// 协程是一种用户态的轻量级线程，又称微线程，英文名Coroutine，协程的调度完全由用户控制。人们通常将协程和子程序（函数）比较着理解。
// 子程序调用总是一个入口，一次返回，一旦退出即完成了子程序的执行。
// 与传统的系统级线程和进程相比，协程的最大优势在于其“轻量级”，可以轻松创建上百万个而不会导致系统资源衰竭，而线程和进程通常最多也不能超过1万的。这也是协程也叫轻量级线程的原因。
// 协程的特点在于是一个线程执行，与多线程相比，其优势体现在：协程的执行效率极高。因为子程序切换不是线程切换，而是由程序自身控制，因此，没有线程切换的开销，和多线程比，线程数量越多，协程的性能优势就越明显。
// Goroutine
// 1.1什么是Goroutine
// go中使用Goroutine来实现并发concurrently。
// Goroutine是Go语言特有的名词。区别于进程Process，线程Thread，协程Coroutine，因为Go语言的创造者们觉得和他们是有所区别的，所以专门创造了Goroutine。
// Goroutine是与其它函数或方法同时运行的函数或方法。Goroutine可以被认为是轻量级的线程。与线程相比，创建Goroutine的成本很小，它就是一段代码，一个函数入口。以及在堆上为其分配的一个堆栈（初始大小为4k，会随着程序执行自行增长删除）。因此它非常廉价，Go应用程序可以并发运行数千个Goroutines。
// Goroutine在线程上的优势。
// 1·与想爱你成相比，Goroutine非常便宜。它们只是堆栈大小的几个kb，堆栈可以根据应用程序的需要增长和收缩，而在线程的情况下，堆栈大小必须指定并且是固定的
// 2·Goroutine被多路复用到较少的OS线程。在一个程序中可能只有一个线程与数千个Goroutine。如果线程中的任何Goroutine都表示等待用户输入，则会创建另一个OS线程，剩下的Goroutines被转移到新的OS线程。所有这些都由运行时进行处理，我们作为程序员从这些复杂的细节中抽象出来，并得到一个与并发工作相关的干净的API。
// 3·当使用Goroutines访问共享内存时，通过设计的通道可以防止静态条件发生。通道可以被认为是Goroutines通信的管道。
// 1.2 主goroutine
// 封装main函数的goroutine称为主goroutine。
// 主goroutine所做的事情并不是执行main函数那么简单。它首先要做的是：设定每一个goroutine所能申请的栈空间的最大尺寸。在32位的计算机系统中此最大尺寸为250MB，而在64位的计算机系统中此尺寸为1GB。如果有某个goroutine的栈空间尺寸大于这个限制，那么运行时系统就会引发一个栈溢出（stack overflow）的运行时恐慌。随后，这个go程序的运行也会终止。
// 此后，主goroutine会进行一系列的初始化工作，涉及的工作内容大致如下：
// 1·创建一个特殊的defer语句，用于在主goroutine退出时做必要的善后处理。因为主goroutine也可能非正常的结束
// 2.启动专用于在后台清扫内存垃圾的goroutine，并设置GC可用的标识
// 3.执行main包中的init函数
// 4.执行main函数
// 	执行完main函数后，它还会检查主goroutine是否引发了运行时恐慌，并进行必要的处理。最后主goroutine会结束自己以及当前进程的运行。

// 1.3如何使用Goroutines
// 在函数或方法调用前面加上关键字go，您将会同时运行一个新的Goroutine。
// package main
// import(
// 	"fmt"
// )
// func hello(){
// 	fmt.Println("Hello world goroutine")
// }

// func main(){
// 	go hello()
// 	fmt.Println("main function")
// }

// 运行结果：可能会输出“main function”。
// 1·当新的Goroutine开始时，Goroutine调用立即返回。与函数不同，go不等待Goroutine执行结束。当Goroutine调用，并且Goroutine的任何返回值被忽略之后，go立即执行到下一行代码。
// 2·main的Goroutine应该为其他的Goroutine执行。如果main的Goroutine终止了，程序将被终止，而其他Goroutine将不会运行。

// package main
// import(
// 	"fmt"
// 	"time"
// )
// func hello(){
// 	fmt.Println("Hello world goroutine")
// }
// func main(){
// 	go hello()
// 	time.Sleep(1 * time.Second)
// 	fmt.Println("main function")
// }

// 在上面的程序中，我们已经调用了时间包的Sleep方法，它会在执行过程中睡觉。在这种情况下，main的goroutine被用来睡觉1秒。现在调用go hello() 有足够的时间在main Goroutine终止之前执行。这个程序首先打印Hello world goroutine，等待1秒，然后打印main函数。

// 1.4启动多个Goroutines
// package main(
// 	"fmt"
// 	"time"
// )
// func numbers(){
// 	for i:=1;i<5;i++{
// 		time.Sleep(250 * time.Millisecond)
// 		fmt.Printf("%d ",i)
// 	}
// }
// func alphabets(){
// 	for i:='a';i<='e';i++{
// 		time.Sleep(400 * time.Millisecond)
// 		fmt.Printf("%c ",i)
// 	}
// }
// func main(){
// 	go numbers()
// 	go alphabets()
// 	time.Sleep(3000 * time.Millisecond)
// 	fmt.Println("main terminated")
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// Go语言的并发模型
// Go语言相比Java等一个很大的又是就是可以方便的编写并发程序。Go语言内置了goroutine机制，使用goroutine可以快速的开发并发程序，更好的利用多核处理器资源。接下来我们来了解一下Go语言的并发原理。

// 一、线程模型
// 在现代操作系统中，线程是处理器调度和分配的基本单位，进程则作为资源拥有的基本单位。每个进程是由私有的虚拟地址空间、代码、数据和其它各种系统资源组成。线程是进程内部的一个执行单元。每一个进程至少有一个主执行线程，它无需由用户去主动创建，是由系统自动创建的。用户根据需要在应用程序中创建其它线程，多个线程并发地运行于同一个进程中，
// 我们先从线程讲起，无论语言层面何种并发模型，到了操作系统层面，一定是以线程的形态存在的。而操作系统根据资源访问权限的不同，体系架构可分为用户空间和内核空间；内核空间主要操作访问CPU资源、I/O资源、内存资源等硬件资源，为上层应用程序提供最基本的基础资源，用户空间呢就是上层应用程序的固定活动空间，用户空间不可以直接访问资源，必须通过“系统调用”、“库函数”或“Shell脚本”来调用内核空间提供的资源。
// 我们现在的计算机语言，可以狭义的认为是一种“软件”，它们中所谓的“线程”，往往是用户态的线程，和操作系统本身内核态的线程（简称KSE），还是有区别的。
// Go并发编程模型在底层是由操作系统所提供的线程库支持的，因此还是得从线程实现模型说起。
// 线程可以视为进程中的控制流。一个进程至少会包含一个线程，因为其中至少会有一个控制流持续运行。因而，一个进程的第一个线程会随着这个进程 的启动而创建，这个线程称为该进程的主线程。当然，一个进程也可以包含多个线程。这些线程都是由当前进程中已存在的线程创建出来的，创建的方法就是调用系统调用，更确切地说是调用pthread create函数。拥有多个线程的进程可以并发执行多个任务，并且即使某个或某些任务被阻塞，也不会影响其他任务正常执行，这可以大大改善程序的相应时间和吞吐量。另一方面，线程不可能独立于进程存在。它的生命周期不可能逾越其所属进程的生命周期。
// 线程的实现模型主要有3个，分别是：用户级线程模型、内核级线程模型和俩级线程模型。他们之间最大的差异就在于线程与内核调度实体（Kernel Schedeling Entity，简称KSE）之间的对应关系上。顾名思义，内核调度实体就是可以被内核的调度器调度的对象。在很多文献和书中，它也称为内核级线程，是操作系统内核的最小调度单元。

// 1·1内核级线程模型
// 用户线程与KSE是1对1关系(1:1)。大部分编程语言的线程库(如Linux的pthread,Java的java.lang.Thread,C++11的std::thread等等)都是对操作系统的线程(内核级线程)的一层封装，创建出来的每个线程与一个不同的KES静态关系，因此其调度完全由OS调度器来做。这种方式实现简单，直接借助OS提供的线程能力，并且不同用户线程之间一般也不会相互影响。但其创建，销毁以及多个线程之间的上下文切换等操作都是直接由OS层面亲自来做，在需要使用大量线程的场景下对OS的性能影响会很大。
// 每个线程由内核调度器独立的调度，所以如果一个线程阻塞则不影响其他的线程。
// 优点：在多核处理器的硬件的支持下，内核空间线程模型支持了真正的并行，当一个线程被阻塞后，允许另一个线程继续执行，所以并发能力较强。
// 缺点：每创建一个用户级线程都需要创建一个内核级线程与其对应，这样创建线程的开销较大，会影响到应用程序的性能。

// 1·2用户级线程模型
// 用户线程与KSE是多对1关系(M:1)，这种线程的创建，销毁以及多个线程之间的协调等操作都是由用户自己实现的线程库负责，对OS内核透明，一个进程中所有创建的线程都与同一个KES在运行时动态关联。现在有许多语言实现的协程基本上都属于这种方式，这种实现方式相比内核级线程可以做的很轻量级，对系统资源的消耗会小很多，因此可以创建的数量与上下文切换所花费的代价也会小得多。但该模型有个致命的缺点，如果我们在某个用户线程上调用阻塞式系统调用（如用阻塞方式read网络IO），那么一旦KSE因阻塞被内核调度处CPU的话，剩下的所有对应的用户线程全部会变成阻塞状态（整个进程挂起）。
// 所以这些语言的协程库会把自己一些阻塞的操作重新封装为完全的非阻塞形式，然后在以前要阻塞的点上，主动让出自己，并通过某种方式通知或唤醒其他待执行的用户线程在该KSE上运行，从而避免了内核调度器由于KSE阻塞而做上下文切换，这样整个进程也不会被阻塞了。
// 优点：这种模型的好处是线程上下文切换都发生在用户空间，避免的模态切换（mode switch），从而对于性能有积极的影响。
// 缺点：所有的线程基于一个内核调度实体即内核线程，这意味着只有一个处理器可以被利用，在多处理器环境下这是不能够被接受的，本质上，用户线程只解决了并发问题，但是没有解决并行问题。如果线程因为I/O操作陷入了内核态，内核态线程阻塞等待I/O数据，则所有的线程都将被阻塞，用户空间也可以使用非阻塞而I/O，但是不能避免性能及复杂度问题。

// 1·3两级线程模型
// 用户线程与KSE是多对多关系(M:N),这种实现综合了前俩种模型的优点，为一个进程中创建多个KSE，并且线程可以与不同的KSE在运行时进行动态关联，当某个KSE由于其上工作的线程的阻塞操作而被内核调度处CPU时，当前与其关联的其余用户线程可以重新与其他KSE建立关联关系。当然这种动态关联机制的实现复杂，也需要用户自己去实现，这算是它的一个缺点吧。Go语言中的并发就是使用的这种实现方式，Go为了实现该模型自己实现了一个运行时调度器来负责Go中的“线程”与KSE的动态关联。此模型有时也被称为混合型线程模型，即用户调度器实现用户线程到KSE的“调度”，内核调度器实现KSE到CPU上的调度。

// 二、Go并发调度：G-P-M模型
// 在操作系统提供的内核线程上，Go搭建了一个特有的俩级线程模型。goroutine机制实现了M:N的线程模型，gotoutine机制是协程（coroutine）的一种实现，golang内置的调度器，可以让多核CPU中每个CPU执行一个协程。

// 2.1调度器是如何工作的
// 有了上面的认识，我们可以开始真正的介绍Go的并发机制了，先用一段代码展示一下在Go语言中新建一个“线程”（Go语言中称为Goroutine）的样子：
// 用go关键字加上一个函数（这里用了匿名函数）
// 调用就做到了在一个新的“线程”并发执行任务
// go func(){

// }()
// 功能上等价于Java8的代码：
// new java.lang.Thread(()->{

// }).start();
// 理解goroutine机制的原理，关键是理解Go语言scheduler的实现。
// Go语言中支撑整个scheduler实现的主要有4个重要结构，分别是M、G、P、Sched，前三个定义在runtime.h中，Sched定义在proc.c中。
// ·Sched机构就是调度器，它维护有存储M和G的队列以及调度器的一些状态信息等。
// ·M结构是Machine，系统线程，它由操作系统管理的，goroutine就是跑在M之上的；M是一个很大的结构，里面维护小对象内存cache（mcache）、当前执行的goroutine、随机数发生器等等非常多的信息。
// ·P结构是Processor，处理器，它的主要用途就是用来执行goroutine的，它维护了一个goroutine队列，即runqueue。Processor是让我们从N:1调度到M:N调度的重要部分。
// ·G是goroutine实现的核心结构，它包含了栈，指令指针，以及其他对调度goroutine很重要的信息，例如其阻塞的channel。
// Processor的数量是在启动时被设置为环境变量GOMAXPROCS的值，或者通过运行时调度函数GOMAXPROCS()进行设置。
// Processor数量固定意味着任意时刻只有GOMAXPROCS个线程在运行go代码。
// 我们分别用三角形、矩形和圆形表示Machine Processor和Goroutine。
// 在单核处理器场景下，所有goroutine运行在同一个M系统线程中，每一个M系统线程维护一个Processor，任何时刻，一个Processor中只有一个goroutine，其他goroutine在runqueue中等待。一个goroutine运行完自己的时间片后，让出上下文，回到runqueue中。多核处理器的场景下，为了运行goroutines，每个M系统线程会持有一个Processor。
// M  		M
// |  		|
// P-G		P-G
// | |		| |
// G G		G G
//   |		  |
//   G		  G
// 在正常情况下，schedule会按照上面的流程进行调度，但是线程会发生阻塞等情况，看一下goroutine对线程阻塞等的处理。
// 2·2线程阻塞
// 当正在运行的goroutine阻塞的时候，例如进行系统调用，会再创建一个系统线程（M1），当前的M线程放弃了它的Processor，P转到新的线程中去运行。
// M1	M0
// 	|
// 	P - G
// 	|   |
// 	G0  G
// 		|
// 		G
// 2·3 runqueue执行完成
// 当其中一个Processor的runqueue为空，没有goroutine可以调度。它会从另外一个上下文偷取一半的goroutine。

// 其图中的G，P和M都是Go语言运行时系统（其中包括内存分配器，并发调度器，垃圾收集器等组件，可以想象为Java中的JVM）抽象出来概念和数据结构对象:
// G:Goroutine的简称，上面用go关键字加函数调用的代码就创建了一个G对象，是对一个要并发执行的任务的封装，也可以称作用户态线程。属于用户级资源，对OS透明，具备轻量级，可以大量创建，上线问切换成本低等特点。
// M:Machine的简称，在Linux平台上是clone系统调用创建的，其与用linux pthread库创建出来的线程本质上是一样的，都是利用系统调用创建出来的OS线程实体。M的作用就是执行G中包装的并发任务。Go运行时系统中的调度器的主要职责就是将G公平合理的安排到多个M上去执行。其属于OS资源，可创建的数量上也受限了OS，通常情况下G的数量都多于活跃的M的。
// P:Processor的简称，逻辑处理器，主要作用是管理G对象（每个P都有一个G队列），并为G在M上的运行提供本地化资源。
// 从两级线程模型来看，似乎并不需要P的参与，有G和M就可以了，那为什么要加入P这个东东呢？
// 其实Go语言运行时系统早期（Go 1.0）的实现中并没有P的概念，Go中的调度器直接将G分配到合适的M上运行。但这样带来了很多问题，例如，不同的G在不同的M上并发运行时可能都需要向系统申请资源（如堆内存），由于资源是全局的，将会由于资源竞争造成很多系统性能损耗，为了解决类似的问题，后面的Go（Go 1.1）运行时系统加入了P，让P去管理G对象，M要想运行G必须先与一个P绑定，然后才能运行该P管理的G。这样带来的好处是，我们可以在P对象中预先申请一些系统资源（本地资源），G需要的时候先向自己的本地P申请（无需锁保护），如果不够用或没有再向全局申请，而且从全局拿的时候会多拿一部分，以供后面高效的使用。就像现在我们去政府办事情一样，先去本地政府看能搞定不，如果搞不定再去中央，从而提高办事效率。
// 而且由于P解耦了G和M对象，这样即使M由于被其上正在运行的G阻塞住，其余与该M关联的G也可以随着P一起迁移到别的活跃的M上继续运行，从而让G总能及时找到M并运行自己，从而提高系统的并发能力。
// Go运行时系统通过构造G-P-M对象模型实现了一套用户态的并发调度系统，可以自己管理和调度自己的并发任务，所以可以说Go语言原生支持并发。自己实现的调度器负责将并发任务分配到不同的内核线程上运行，然后内核调度器接管内核线程在CPU上的执行与调度。
// 可以看到Go的并发用起来非常简单，用了一个语法糖将内部复杂的实现结结实实的包装了起来。其内部可以用下面这张图来概述:
// 写在最后，Go运行时完整的调度系统是很复杂，很难用一篇文章描述的清楚，这里只能从宏观上介绍一下，让大家有个整体的认识。
// // Goroutine1
// func task1(){
// 	go task2()
// 	go task3()
// }
// 假如我们有一个G(Goroutine1)已经通过P被安排到了一个M上正在执行，在Goroutine1执行的过程中我们又创建俩个G，这俩个G会被马上放入与Goroutine1相同的P的本地G任务队列中，排队等待与该P绑定的M的执行，这是最基本的结构，很好理解。关键问题是:
// a.如何在一个多核心系统上尽量合理分配G到多个M上运行，充分利用多核，提高并发能力呢？
// 如果我们在一个Groutine中通过go关键字创建了大量G，这些G虽然暂时会被放在同一个队列，但如果这是还有空闲P(系统内P的数量默认等于系统cpu核心数)，Go运行时系统始终能保证至少有一个（通常也只有一个）活跃的M与空闲P绑定去各种G队列寻找可运行的G任务，该种M称为自旋的M。一般寻找顺序为:自己绑定的P的队列，全局队列，然后其他P队列。如果自己P队列找到就拿出来开始运行，否则去全局队列看看，由于全局队列需要锁保护，如果里面有很多任务，会转移一批到本地P队列中，避免每次都去竞争锁。如果全局队列还是没有，就要开始玩狠的了，直接从其他P队列偷任务了（偷一半任务回来）。这样就保证了在还有可运行的G任务的情况下，总有与CPU核心数相等的M+P组合，在执行G任务或在执行G的路上（寻找G任务）。
// b.如果某个M在执行G的过程中被G中的系统调用阻塞了，怎么办？
// 在这种情况下，这个M将会被内核调度器调度出CPU并处于阻塞状态，与该M关联的其他G就没有办法继续执行了，但Go运行时系统的监控线程（sysmon线程）能探测到这样的M，并把与该M绑定的P剥离，寻找其他空闲或新建M接管该P，然后继续运行其中的G，大致过程如下图所示。然后等到该M从阻塞状态恢复，需要重新找一个空间P来继续执行原来的G，如果这时系统正好没有空闲的P，就把原来的G放到全局队列中，等待其他M+P组合发掘并执行。
// c.如果某一个G在M运行时间过长，有没有办法做抢占式调度，让该M上的其他G获得一定的运行时间，以保证调度系统的公平性？
// 我们知道linux的内核调度器主要是基于时间片和优先级做调度的。对于相同的优先级的线程，内核调度器会尽量保证每个线程都能获得一定的执行时间。为了防止有些线程“饿死”的情况，内核调度器会发起抢占式调度将长期运行的线程中断并让出CPU资源，让其他线程获得执行机会。当然在Go的运行时调度器中也会有类似的抢占机制，但并不能保证抢占能成功，以为Go运行时系统并没有内核调度器的中断能力，它只能通过向运行时间过长的G中设置抢占flag的方法温柔的让运行的G自己主动让出M的执行权。
// 说到这里就不得不提一下Goroutine在运行过程中可以动态扩展自己的线程栈的能力，可以从初始的2KB大小扩展到最大1G（64bit系统上），因此抢占式调度的机制就是利用在判断要不要扩栈的时候顺便查看以下自己的抢占flag，决定是否继续执行，还是让出自己。
// 运行时系统的监控线程会计时并设置抢占flag到运行时间过长的G，然后G在有函数调用的时候会检查抢占flag，如果已设置就将自己放到全局队列，这样该M上关联的其他G就有机会执行了。但如果正在执行的G是个很耗时的操作且没有任何函数调用（如只是for循环中的计算操作），即使抢占flag已经被设置，该G还是将一直霸占着当前M直到执行完自己的任务。

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// runtime包
// 官方文档runtime包介绍:
// Package runtime contains operations that interact with Go's runtime system,such as functions to control goroutines.It also include the low-level type information used by the reflect package; see reflect's documentation for the programmable interface to the run-time type system.
// 尽管Go编译器产生的是本地可执行代码，这些代码仍旧运行在Go的runtime（这部分的代码可以在runtime包中找到）当中。这个runtime类似Java和。NET语言所用到的虚拟机，它负责管理包括内存分配、垃圾回收（第10.8节）、栈处理、goroutine、channel、切片（slice）、map和反射（reflection）等等。
// 一、常用函数
// runtime调度器是个非常有用的东西，关于runtime包几个方法:
// ·NumCPU:返回当前系统的CPU核数量
// ·GOMAXPROCS:设置最大的可同时使用的CPU核数
// 	通过runtime。GOMAXPROCS函数，应用程序可以在运行期间设置运行时系统中的P最大数量。但这会引起“Stop the World”。所以，应在应用程序最早的调用。并且最好是在运行Go程序之前设置好操作程序的环境变量GOMAXPROCS，而不是在程序中调用runtime.GOMAXPROCS函数。
// 	无论我们呢传递给函数的整数值是什么值，运行时系统的P最大值总会在1~256之间。
// 	go1.8后，默认让程序运行在多个核上，可以不用设置了；
// 	go1.8前，还是要设置一下，可以更高效的利用cpu
// ·Gosched:让当前线程让出cpu以让其它线程运行，它不会挂起当前线程，因此当前线程未来会继续执行
// 	这个函数的作用是让当前goroutine让出CPU，当一个goroutine发生阻塞，Go会自动地把与该goroutine处于同一系统线程的其他goroutine转移到另一个系统线程上去，以便这些goroutine不阻塞。
// ·Goexit:退出当前goroutine（但是defer语句会照常执行）
// ·NumGoroutine:返回正在执行和排队的任务总数
// 	runtime.NumGoroutine函数在被调用后，会返回系统中的处于特定状态的Goroutine的数量。这里的特指是指Grunnable\Gruning\Gsyscall\Gwaition。处于这些状态的Groutine即被看做是活跃的或者说正在被调度。
// 	注意:垃圾回收所在的Groutine的状态也处于这个范围内的话，也会被纳入该计数器。
// ·GOOS:目标操作系统
// ·runtime.GC:会让运行时系统进行一次强制性的垃圾收集
// 	1·强制的垃圾回收:不管怎样，都要进行的垃圾回收。
// 	2·非强制的垃圾回收:只会在一定条件下进行的垃圾回收（及运行时，系统自上次垃圾回收之后新申请的堆内存的单元（也成为单元增量）达到指定的数值）。
// ·GOROOT:获取goroot目录:
// ·GOOS:查看目标操作系统
// 	很多时候，我们会根据平台的不同实现不同的操作，就而已用GOOS了:
// ·。。。
// 二、示例代码:
// 1·获取goroot和os:
// // 获取goroot目录
// fmt.Println("GOROOT-->",runtime,GOROOT())
// // 获取操作系统
// fmt.Println("os/platform-->",runtime.GOOS)
// 2·获取CPU数量，和设置CPU数量:
// func init(){
// 	// 1·获取逻辑cpu的数量
// 	fmt.Println("逻辑CPU的核数:",runtime.NumCPU())
// 	// 2·设置go程序执行的最大值:[1,256]
// 	n:=runtime.GOMAXPROCS(runtime.NumCPU())
// 	fmt.Println(n)
// }
// 3·Gosched():
// func main(){
// 	go func(){
// 		for i:=0;i<5;i++{
// 			fmt.Println("goroutine...")
// 		}
// 	}()

// 	for i:=0;i<4;i++{
// 		// 让出时间片，先让别的协议执行，它执行完，再回来执行此协程
// 		runtime.Gosched()
// 		fmt.Println("main..")
// 	}
// }
// 4·Goexit的使用（终止协议）
// func main(){
// 	// 创建新建的协程
// 	go func(){
// 		fmt.Println("goroutine开始。。。")
// 		// 调用了别的函数
// 		fun()
// 		fmt.Println("goroutine结束。。")
// 	}()
// 	// 休眠，不让主协程结束
// 	time.Sleep(3*time.Second)
// }

// func fun(){
// 	defer fmt.Println("defer。。。")
// 	runtime.Goexit()//终止所在的协程
// 	fmt.Println("fun函数。。。")
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 临街资源安全问题
// 一、临界资源
// 临界资源：指并发环境中多个进程/协程共享的资源。
// 但是在并发编程中对临界资源的处理不当，往往会导致数据不一致的问题。
// 示例代码：
// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	a := 1
// 	go func() {
// 		a = 2
// 		fmt.Println("子goroutine", a)
// 	}()
// 	a = 3
// 	time.Sleep(1)
// 	fmt.Println("main goroutine", a)
// }

// 二、临界资源安全问题
// 并发本身并不复杂，但是因为有了资源竞争的问题，就使得我们开发出好的并发程序变得复杂起来，因为会引起很多莫名其妙的问题。
// 如果多个goroutine在访问同一个数据资源的时候，其中一个线程修改了数据，那么这个数值就被修改了，对于其他的goroutine来讲，这个数值可能是不对的。
// 举个例子，我们通过并发来实现火车站售票这个程序。一共有1000张票，4个售票口同时出售。
// 示例：
// package main

// import (
// 	"fmt"
// 	"math/rand"
// 	"time"
// )

// var ticket = 10

// func main() {
// 	// 4个goroutine,模拟4个售票口，4个子程序操作同一个共享数据。
// 	go saleTickets("A")
// 	go saleTickets("B")
// 	go saleTickets("C")
// 	go saleTickets("D")

// 	time.Sleep(5 * time.Second)
// }

// func saleTickets(name string) {
// 	rand.Seed(time.Now().UnixNano())
// 	// for i := 1; i <= 100; i++ {
// 	// 	fmt.Println(name, "售出:", i)
// 	// }
// 	for {
// 		if ticket > 0 {
// 			time.Sleep(time.Duration(rand.Intn(1000)) * time.Millisecond)
// 			fmt.Println(name, "售出:", ticket)
// 			ticket--
// 		} else {
// 			fmt.Println(name, "售罄")
// 			break
// 		}
// 	}
// }
// 我们为了更好的观察临界资源问题，每个goroutine先睡眠一个随机数，然后再售票，我们呢发现程序的运行结果，还可以卖出编号为负数的票。

// 四、写在最后
// 在Go的并发编程中有一句很经典的话：不要以共享内存的方式去通信，而要以通信的方式去共享内存。
// 在Go语言中并不鼓励用锁保护共享状态的方式在不同的Goroutine中分享信息（已共享内存的方式去通信）。而是鼓励通过channel将共享状态或共享状态的变化在各个Goroutine之间传递（以通信的方式去共享内存），这样同样能像用锁一样保证在同一的时间只有一个Goroutine访问共享状态。
// 当然，在主流的编程语言中为了保证多线程之间共享数据安全性和一致性，都会提供一套基本的同步工具集，如锁，条件变量，原子操作等等。Go语言标准库也毫不意外的提供了这些同步机制，使用方式也和其他语言也差不多。

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// sync包-WaieGroup
// package sync provides basic synchronization primitives such as mutual exclusion locks.Other than the Once and WaitGroup types.most are intended for use by low-level library routines.Higher-level synchronization is better done via channels and communication.
// sync是synchronization同步这个词的缩写，所以也会叫做同步包。这里提供了基本同步的操作，比如互斥锁等等。这里除了Once和WaitGroup类型外，大多数类型都是提供低级库 历程使用的。更高级别的同步最好通过channel通道和communication通信来完成。
// 一、WaitGroup
// WaitGroup，同步等待组。
// 在类型上，它是一个结构体。一个WaitGroup的用途是等待一个goroutine的集合执行完成。主goroutine调用了Add()方法来设置要等待的goroutine的数量。然后，每个goroutine都会执行并且执行完成后调用Done()这个方法。与此同时，可以使用Wait()方法阻塞，直到所有的goroutine都执行完成。
// 二、Add()方法:
// Add这个方法，用来设置到WaitGroup的计数器的值。我们可以理解为每个waitgroup中都有一个计数器用来表示这个同步等待组中要执行的goroutine的数量。
// 如果技术器的数值变为0，那么就表示等待时被阻塞的goroutine都被释放，如果计数器的数值为负数，那么就引发恐慌，程序就报错了。
// 三、Done()方法
// Done()方法，就是当WaitGroup同步等待组中的某个goroutine执行完毕后，设置这个WaitGroup的counter数值减1。
// 其实Done()的底层代码就是调用了Add()方法:
// // Done decrements the WaitGroup counter by one.
// func (wg *WaitGroup) Done(){
// 	wg.Add(-1)
// }
// 四、Wait()方法
// Wait()方法，表示让当前的goroutine等待，进入阻塞状态。一直到WaitGroup的计数器为零。才能解除阻塞，这个goroutine才能继续执行。
// 五、示例代码
// 我们创建并启动俩个goroutine，来打印数字和字母，并在main goroutine中，将这俩个子goroutine加入到一个WaitGroup中，同时让main goroutine进入Wait()，让俩个子goroutine先执行。当每个子goroutine执行完毕后，调用Done()方法，设置WaitGroup的counter减一。当俩条子goroutine都执行完毕后，WaitGroup中的counter的数值为零，解除main goroutine的阻塞。

// package main

// import (
// 	"fmt"
// 	"sync"
// )

// var wg sync.WaitGroup

// func main() {
// 	// WaitGroup:同步等待组
// 	// 	可以使用Add()，设置等待组中药执行的子goroutine的数量;
// 	// 	在main函数中，使用wait(),让主程序处于等待状态。直到等待组中子程序执行完毕。解除阻塞子goroutine对应的函数中。wg.Done()，用于让等待组中的子程序的数量减一。
// 	wg.Add(2)
// 	go fun1()
// 	go fun2()
// 	fmt.Println("main进入阻塞，等待wg中的子goroutine结束")
// 	wg.Wait()
// 	fmt.Println("main 解除阻塞")
// }
// func fun1() {
// 	for i := 1; i < 10; i++ {
// 		fmt.Println("fun1,i:", i)
// 	}
// 	wg.Done()
// }
// func fun2() {
// 	defer wg.Done()
// 	for j := 1; j <= 10; j++ {
// 		fmt.Println("\tfun2,j:", j)
// 	}
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// sync包-互斥锁
// Package sync provides basic synchronization primitives such as mutual exclusion locks.Other than the Once and WaitGroup types.most are intended for use by low-level library routines.Higher-level synchronization is better done via channels and communication.
// sync 是synchronization同步这个单词的缩写，所以也会被叫做同步包。这里提供了基本同步的操作，比如互斥锁等等。这里除了Once和WaitGroup类型之外，大多数类型都是提供低级库例程使用的。更高级别的同步最好通过channel通道和communication通信来完成。

// 一、Mutex（互斥锁）
// 通过上一小节，我们知道了在并发程序中，会存在临界资源问题。就是当多个协程来访问共享的数据资源，那么这个共享资源是不安全的。为了解决协程同步的问题我们使用了channel，但是Go语言也提供了传统的同步工具。
// 什么是锁呢？就是某个协程（线程）在访问某个资源时先锁住，防止其他协程的访问，等访问完毕解锁后其他协程再来加锁进行访问。一般用于处理并发中的临界资源问题。
// Go语言包中的sync包提供了俩种锁类型:sync.Mutex和sync.RWMutex。
// Mutex是最简单的一种类型，互斥锁，同时也比较暴力，当一个goroutine获得Mutex后，其他goroutine就只能乖乖等到这个goroutine释放该Mutex。
// 每个资源都对应于一个可称为“互斥锁”的标记，这个标记用来保证在任意时刻，只能有一个协程（线程）访问该资源。其它的协程只能等待。
// 互斥锁是传统并发编程对共享资源进行访问控制的主要手段，它由标准库sync中的Mutex结构体类型表示。sync.Mutex类型只有俩个公开的指针方法，Lock和Unlock。Lock锁定当前的共享资源，Unlock进行解锁。
// 在使用互斥锁时，一定要注意:对资源操作完成后，一定要解锁，否则会出现流程执行异常，死锁等问题。通常借助defer。锁定后，立即使用defer语句保证互斥锁及时解锁。

// A mutex is a mutual exclusion lock.
// The zero value for a Mutex is an unlocked mutex.
// A Mutex must not be copied after first use.
// type Mutex struct{
// 	state int32 // 互斥锁上锁状态枚举值如下所示
// 	sema uint32 // 信号量，向处于Gwaitting的G发送信号
// }
// A Locker represents an object that can be locked and unlocked.
// type Locker interface{
// 	Lock()
// 	Unlock()
// }
// const(
// 	mutexLocked = 1<<iota  // mutex is locked, 1互斥锁是锁定的
// 	mutexWoken // 2唤醒锁
// 	mutexStarving
// 	mutexWaiterShift = iota // 统计阻塞在这个互斥锁上的goroutine数目需要移位的数值
// 	starvationThresholdNs = 1e6
// )

// 二、Lock()方法:
// Lock()这个方法，锁定m。如果该锁已经在使用，则调用goroutine将阻塞，直到互斥可用。

// 三、Unlock()方法:
// Unlock()方法，解锁解锁m。如果m未在要解锁的条目上锁定，则为运行时错误。
// 锁定的互斥体不与特定的goroutine关联。允许一个goroutine锁定互斥体，然后安排另一个goroutine解锁互斥体。

// 五、示例代码:
// 我们针对于上次课程的汇总，使用goroutine，模拟4个售票口出售火车票的案例。4个售票口同时卖票，会发生临界资源数据安全问题。我们呢使用互斥锁解决一下。（Go语言推崇使用Channel来实现数据共享，但是也还是提供了传统的同步处理方式。）
// eg:
// package main

// import (
// 	"fmt"
// 	"math/rand"
// 	"sync"
// 	"time"
// )

// // 全局变量，表示票
// var ticket = 10       //100张票
// var mutex sync.Mutex  //创建锁头
// var wg sync.WaitGroup //同步等待组对象
// func main() {
// 	/*
// 		4个goroutine,模拟4个售票口，
// 		在使用互斥锁的时候，对资源操作完，一定要解锁。否则会出现程序异常，死锁等问题。
// 		defer语句。
// 	*/
// 	wg.Add(4)
// 	go saleTickets("A:")
// 	go saleTickets("B:")
// 	go saleTickets("C:")
// 	go saleTickets("D:")

// 	wg.Wait() //main要等待
// 	fmt.Println("end")

// 	// time.Sleep(5*time.Second)
// }
// func saleTickets(name string) {
// 	rand.Seed(time.Now().UnixNano())
// 	defer wg.Done()
// 	for {
// 		mutex.Lock()
// 		if ticket > 0 {
// 			time.Sleep(time.Duration(rand.Intn(1000)) * time.Millisecond)
// 			fmt.Println(name, "sale:", ticket)
// 			ticket--
// 		} else {
// 			mutex.Unlock()
// 			fmt.Println(name, "sale end")
// 			break
// 		}
// 		mutex.Unlock()
// 	}
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// sync包 - 读写锁
// 官方文档对sync包的介绍:
// Package sync provides basic synchronization primitives such as mutual exclusion locks.Other than Once and WaitGroup types,most are intended for use by low-level library routines.Higher-level synchronization is better done via channels and communication.
// sync是synchronization同步这个词的缩写，所以也会叫做同步包。这里提供了基本同步的操作，比如互斥锁等等。这里除了Once和WaitGroup类型之外，大多数类型都是供低级库程序使用的。更高级的同步最好通过channel通道和communication通信来完场。
// 一、RWMutex(读写锁)
// 通过对互斥锁的学习，我们已经知道了锁的概念以及用途。主要是用于处理并发中的临界资源问题。
// Go语言包中的sync包提供了俩种锁类型:sync.Mutex和sync.RwMutex。其中RWMutex是基于Mutex实现的，只读锁的实现使用类似引用计数器的功能。
// RWMutex是读/写互斥锁。锁可以由任意数量的读取器或单个编写器持有。RWMutex的零值是未锁定的Mutex。
// 如果一个goroutine持有一个rRWMutex进行读取，而可另一个goroutine可能调用lock，那么在释放初始读取锁之前，任何goroutine都不应该期望能获取读取锁。特别是，这禁止递归读取锁定。这是为了确保锁最终可用；被阻止的锁调用会将新的读卡器排除在获取锁之外。
// 我们怎么理解读写锁呢？当有一个goroutine获得写锁定，其它无论是读锁定还是写锁定都将阻塞直到写解锁；当有一个goroutine获得读锁定，其它读锁定仍然可以继续，当有一个或任意多个读锁定，写锁定将等待所有读锁定解锁之后才能够进行写锁定。所以说这里的读锁定（RLock）目的其实是告诉写锁定:有很多人正在读取数据，你给我站一边去，等它们(读解锁)完你再来写(写锁定)。我们可以将其总结为如下三条:
// 1、同时只能有一个goroutine能够获得写锁定。
// 2、同时可以有任意多个goroutine获得读锁定。
// 3、同时只能存在写锁定或读锁定(读和写互斥)。
// 所以，RWMutex这个读写锁，该锁可以加多个读锁或者一个写锁，其经常用于读次数远远多于写次数的场景。
// 读写锁的写锁只能锁定一次，解锁前不能多次锁定，读锁可以多次，但读解锁次数最多只能比读锁次数多一次，一般情况下我们不建议读解锁次数多余读锁次数。
// 基本遵循俩大原则:
// 1、可以随意读，多个goroutine同时读。
// 2、写的时候，啥也不能干。不能读也不能写。
// 读写锁即是针对于读写操作的互斥锁。它与普通的互斥锁最大的不同就是，它可以分别针对读操作和写操作进行锁定和解锁操作。读写锁遵循的访问控制规则与互斥锁有所不同。在读写锁管辖范围内，它允许任意个读操作的同时进行。但在同一时刻，它只允许有一个写操作在进行。
// 并且在某一个写操作被进行的过程中，读操作的进行也是不被允许的。也就是说读写锁控制下的多个写操作之前都是互斥，并且写操作与读操作之前也都是互斥的。但是，多个读操作之前却不存在互斥关系。

// 二、常用方法
// 2.1、RLock()方法
// func(rw *RWMutex) RLock()
// 读锁，当有写锁时，无法加载读锁，当只有读锁或者没有锁时，可以加载读锁，读锁可以加载多个，所以适用于“读多写少”的场景。
// 2.2、RUnlock()方法
// func (rw *RWMutex) RUnlock()
// 读锁解锁,RUnlock撤销单词RLock调用,它对于其它同时存在的读取器则没有效果。若rw并没有为读取而锁定，调用RUnlock就会引发一个运行时错误。
// 2.3、Lock()方法:
// func (rw *RWMutex)Lock()
// 写锁，如果在添加写锁之前已经有其他的读锁和写锁，则Lock就会阻塞直到该锁可用，为确保该锁最终可用，已阻塞的Lock调用会从获得的锁中排除新的读取锁，即写锁权限高于读锁，有写锁时优先进行写锁定。
// 2.4、Unlock()方法
// func (rw *RWMutex) Unlock()
// 写锁解锁，如果没有进行写锁定，则就会引起一个运行时错误。

// 三、代码示例:
// package main

// import (
// 	"fmt"
// 	"sync"
// 	"time"
// )

// var rwMutex *sync.RWMutex
// var wg *sync.WaitGroup

// func main() {
// 	rwMutex = new(sync.RWMutex)
// 	wg = new(sync.WaitGroup)

// 	// wg.Add(2)
// 	// 多个同时读取
// 	// go readData(1)
// 	// go ReadData(2)

// 	wg.Add(3)
// 	go writeData(1)
// 	go readData(2)
// 	go writeData(3)

// 	wg.Wait()
// 	fmt.Println("main..over..")
// }

// func writeData(i int) {
// 	defer wg.Done()
// 	fmt.Println(i, "begin_write")
// 	rwMutex.Lock()
// 	fmt.Println(i, "writing...")
// 	time.Sleep(3 * time.Second)
// 	rwMutex.Unlock()
// 	fmt.Println(i, "end_write")
// }

// func readData(i int) {
// 	defer wg.Done()

// 	fmt.Println(i, "begin_read")

// 	rwMutex.RLock()
// 	fmt.Println(i, "Reading...")
// 	time.Sleep(3 * time.Second)
// 	rwMutex.RUnlock()
// 	fmt.Println(i, "end_read")
// }

// 最后概括:
// 1、读锁不能阻塞堵塞
// 2、读锁需要阻塞写锁，直到所有读锁都释放
// 3、写锁需要阻塞读锁，直到所有写锁都释放
// 4、写锁需要阻塞写锁

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// channel通道
// 通道可以被认为是Goroutine通信的管道。类似于管道中的水从一端到另一端的流动，数据可以从一端发送到另一端，通过通道接收。
// 在前面讲Go语言的并发时候，我们就说过，当多个Goroutine想实现共享数据的时候，虽然也提供了传统的同步机制，但是Go语言强烈建议的是使用Channel通道来实现Goroutine之间的通信。
// “不要通过共享内存来通信，而应该通过通信来共享内存”这是一句风靡golang社区的经典语
// Go语言中，要传递某个数据给另一个goroutine（协程），可以把这个数据封装成一个对象，然后把这个对象的指针传入某个channel中，另外一个goroutine从这个channel中读出这个指针，并处理其指向的内存对象。Go从语言层面保证同一时间只有一个goroutine能够访问channel里面的数据，为开发者提供了一个优雅简单的工具，所以Go的做法就是使用channel来通信，通过通信来传递内存数据，使得内存数据在不同的goroutine中传递，而不是使用共享内存来通信。
// 一、什么是通道
// 1.1、通道的概念
// 通道是什么，通道就是goroutine之间的通道。它可以让goroutine之间互相通信。
// 每个通道都有与其相关的类型。该类型是通道允许传输的数据类型。（通道的零值为nil。nil通道没有任何用处，因此通道必须使用类似于map和切片的方法来定义。）
// 1.2通道的声明
// 声明一个通道和定义一个变量的语法一样:
// 声明通道
// var 通道名 chan 数据类型
// 创建通道:如果通道为nil（就是不存在），就需要先创建通道
// 通道名 = make(chan 数据类型)
// 示例代码:
// package main

// import "fmt"

// func main() {
// 	var a chan int
// 	if a == nil {
// 		fmt.Println("channel 是 nil 的，不能使用，需要先创建通道。。。")
// 		a = make(chan int)
// 		fmt.Printf("数据类型是:%T", a)
// 	}
// }

// 1.3 channel的数据类型
// channel是引用类型的数据,在作为参数传递的时候，传递的是内存地址。
// 示例代码:
// package main

// import (
// 	"fmt"
// )

// func main() {
// 	ch1 := make(chan int)
// 	fmt.Printf("%T,%p\n", ch1, ch1)
// 	test1(ch1)
// }
// func test1(ch chan int) {
// 	fmt.Printf("%T,%p\n", ch, ch)
// }
// 我们能够看到，ch和ch1的地址是一样的，说明它们是同一个通道。
// 1.4通道的注意点
// Channel通道在使用的时候，有以下几个注意点:
// ·1.用于goroutine，传递消息的。
// ·2.通道，每个都有相关联的数据类型，
// 	nil chan，不能使用，类似于nil map，不能直接存储键值对
// ·3.使用通道传递数据:<-
// 	chan<-data,发送数据到通道。向通道中写数据
// 	data<-chan，从通道中获取数据。从通道中读数据
// ·4.阻塞:
// 	发送数据:chan<-data,阻塞的，直到另一条goroutine,读取数据来解除阻塞
// 	读取数据:data<-chan,也是阻塞的。直到另一条goroutine，写出数据解除阻塞。
// ·5.本身channel就是同步的，意味着同一时间，只能有一条goroutine来操作。
// 最后:通道是goroutine之间的连接，所以通道的发送和接收必须处在不同的goroutine中。
// 二、通道的使用语法
// 2.1发送和接收
// 发送和接收的语法:
// data:=<-a // read from channel a
// a <- data // write to channel a
// 在通道上箭头的方向指定数据是发送还是接收。
// 另外:
// v,ok:=<-a // 从一个channel中读取
// 2.2 发送和接收默认是阻塞的
// 一个通道发送和接收数据，默认是阻塞的。当一个数据被发送到通道时，在发送语句中被阻塞，直到另一个Goroutine从该通道读取数据。相对地，当从通道读取数据时，读取被阻塞，直到一个Goroutine将数据写入该通道。
// 这些通道的特性是帮助Goroutine有效地进行通信，而无需像使用其他编程语言中非常常见的显示锁或条件变量。
// 示例代码:
// package main

// import "fmt"

// func main() {
// 	var ch1 chan bool
// 	fmt.Println(ch1)
// 	fmt.Printf("%T\n", ch1)
// 	ch1 = make(chan bool)
// 	fmt.Println(ch1)

// 	go func() {
// 		for i := 0; i < 10; i++ {
// 			fmt.Println("子goroutine中,i:", i)
// 		}
// 		ch1 <- true
// 		fmt.Println("end...")
// 	}()

// 	data := <-ch1
// 	fmt.Println("data-->", data)
// 	fmt.Println("main...over...")
// }

// 在上面的程序中，我们先创建了一个chan bool通道。然后启动了一条子Goroutine，并循环打印10个数字。然后我们想通道ch1中写入输入true。然后在主goroutine中，我们从ch1中读取数据。这一行代码是阻塞的，这意味着在子Goroutine将数据写入到该通道之前，主Goroutine将不会执行到下一行代码。因此，我们可以通过channel实现子goroutine和主goroutine之间的通信。当子goroutine执行完毕前，主goroutine会因为读取ch1中的数据而阻塞。从而保证了子goroutine会先执行完毕。这就消除了对时间的需求。在之前的程序中，我们要么让主goroutine进入睡眠，以防止主要的Goroutine退出。要么通过WaitGroup来保证子goroutine先执行完毕，主goroutine才结束。
// 示例代码:以下代码加入了睡眠，可以更好的理解channel的阻塞

// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	ch1 := make(chan int)
// 	done := make(chan bool)
// 	go func() {
// 		fmt.Println("son goroutine ing...")
// 		time.Sleep(3 * time.Second)
// 		data := <-ch1
// 		fmt.Println("data:", data)
// 		done <- true
// 	}()
// 	time.Sleep(5 * time.Second)
// 	ch1 <- 100
// 	<-done
// 	fmt.Println("main...over")
// }

// 打印一个数字的各位数的平方和
// package main

// import (
// 	"fmt"
// )

// func calcSquares(number int, squareop chan int) {
// 	sum := 0
// 	for number != 0 {
// 		digit := number % 10
// 		sum += digit * digit
// 		number /= 10
// 	}
// 	squareop <- sum
// }

// func calcCubes(number int, cubeop chan int) {
// 	sum := 0
// 	for number != 0 {
// 		digit := number % 10
// 		sum += digit * digit * digit
// 		number /= 10
// 	}
// 	cubeop <- sum
// }

// func main() {
// 	number := 589
// 	sqrch := make(chan int)
// 	cubech := make(chan int)
// 	go calcSquares(number, sqrch)
// 	go calcCubes(number, cubech)
// 	squares, cubes := <-sqrch, <-cubech
// 	fmt.Println("Final output", squares+cubes)
// }

// 2.3死锁
// 使用通道时要考虑的一个重要因素是死锁。如果Goroutine在一个通道上发送数据，那么预计其他的Goroutine应该接收数据。如果这种情况不发生，那么程序将在运行时出现死锁。
// 示例代码:
// package main

// func main() {
// 	ch := make(chan int)
// 	ch <- 5
// }

// 在主流的编程语言中为了保证多线程之间共享数据安全性和一致性，都会提供一套基本的同步工具集，如锁，条件变量，原子操作等等。Go语言标准库也毫不意外的提供了这些同步机制，使用方式也和其他语言也差不多。
// 除了这些基本的同步手段，Go语言还提供了一种新的同步机制:Channel,它在Go语言中是一个像ini，float32等的基本类型，一个channel可以认为是一个能够在多个Goroutine之间传递某一类型的数据的管道。Go中的channel无论是实现机制还是使用场景都和Java中的BlockingQueue很接近。

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 关闭通道和通道上范围循环
// 一、关闭通道
// 发送者可以通过关闭信道，来通知接收方不会有更多的数据发送到channel上。
// close(ch)
// 接收者可以在接收来自通道的数据时使用额外的变量来检查通道是否已经关闭。
// 语法结构:
// v,ok:=<-ch
// 	类似map操作，存储key，value键值对
// 	v,ok:=map[key] 根据key从map中获取value，如果key存在，v就是对应的数据，如果key不存在，v是默认值。
// 在上面的语句中，如果ok的值是true，表示成功的从通道中读取了一个数据value。如果ok是false，这意味着我们正在从一个封闭的通道读取数据。从关闭通道读取的值将是通道类型的零值。

// 例如，如果通道是一个int通道，那么从封闭通道接收的值将为0。

// 示例代码:
// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	ch1 := make(chan int)
// 	go sendData(ch1)
// 	// 子goroutine，写出数据10个每写一个，阻塞一个，主程序读取一次，解除阻塞
// 	// 主goroutine:循环读每次读取一次，阻塞一次，子程序，写出一个，解除阻塞
// 	// 发送中，关闭通道的--->接收方，接收到的数据是该类型的零值，以及false
// 	// 主程序中获取通道的数据
// 	for {
// 		time.Sleep(1 * time.Second)
// 		v, ok := <-ch1 //其他goroutine，显示的调用close方法关闭通道。
// 		if !ok {
// 			fmt.Println("已经读取了所有的数据,", ok)
// 			break
// 		}
// 		fmt.Println("取出数据:", v, ok)
// 	}
// 	fmt.Println("main...over...")
// }

// func sendData(ch1 chan int) {
// 	// 发送方:10条数据
// 	for i := 0; i < 10; i++ {
// 		ch1 <- i //将i写入通道中
// 	}
// 	close(ch1) //将ch1通道关闭了
// }

// 在上面的程序中，send Goroutine将0到9写入ch1通道，然后关闭通道。主函数里有一个无限循环。它检查通道是否在发送数据后，使用变量ok关闭。如果ok是假的，则意味着通道关闭，因此循环结束。还可以打印接收到的值和ok的值。

// 二、通道上的范围循环
// 我们可以循环从通道上获取数据，直到通道关闭。for循环的for range形式可用于从通道接收值，直到它关闭为止。使用range循环，示例代码:

// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	ch1 := make(chan int)
// 	go sendData(ch1)
// 	// for 循环的for range形式可用于从通道接收值，直到它关闭为止。
// 	for v := range ch1 {
// 		fmt.Println("读取数据:", v)
// 	}
// 	fmt.Println("main...over...")
// }

// func sendData(ch1 chan int) {
// 	for i := 0; i < 10; i++ {
// 		time.Sleep(1 * time.Second)
// 		ch1 <- i
// 	}
// 	// 通知对方，通道关闭
// 	close(ch1)
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 缓冲通道

// 一、非缓冲通道
// 之前学习的所有通道基本上都没有缓冲。发送和接收到一个未缓冲的通道是阻塞的。
// 一次发送操作对应一次接收操作，对于一个goroutine来讲，它的一次发送，在另一个goroutine接收之前都是阻塞的。同样的，对于接收来讲，在另一个goroutine发送之前，它也是阻塞的。

// 二、缓冲通道
// 缓冲通道就是指一个通道，带有一个缓冲。发送到一个缓冲通道只有在缓冲区满时才被阻塞。类似地，从缓冲通道接收的信息只有在缓冲区为空时才被阻塞。

// 可以通过将额外的容量参数传递给make函数来创建缓冲通道，该函数指定缓冲区的大小。

// 语法:
// ch := make(chan type,capacity)

// 上述语法的容量应该大于0，以便通道具有缓冲区。默认情况下，无缓冲通道的容量为0，因此在之前创建通道时省略了容量参数。

// 三、示例代码
// 以下的代码中，chan通道，是带有缓冲区的。

// package main

// import (
// 	"fmt"
// 	"strconv"
// 	"time"
// )

// func main() {
// 	// 非缓存通道:make(chan T)
// 	// 缓存通道:make(chan T,size)
// 	// 缓存通道,理解为是队列:
// 	// 非缓存,发送还是接受，都是阻塞的
// 	// 缓存通道,缓存区的数据满了，才会阻塞状态...
// 	ch1 := make(chan int)
// 	fmt.Println(len(ch1), cap(ch1))
// 	// ch1 <- 100 // 阻塞的，需要其他的goroutine解除阻塞，否则deadlock
// 	ch2 := make(chan int, 5)
// 	fmt.Println(len(ch2), cap(ch2))
// 	ch2 <- 100
// 	fmt.Println(len(ch2), cap(ch2))

// 	// ch2<-200
// 	// ch2<-300
// 	// ch2<-400
// 	// ch2<-500
// 	// ch2<-600

// 	fmt.Println("----------")
// 	ch3 := make(chan string, 4)
// 	go sendData3(ch3)
// 	for {
// 		time.Sleep(1 * time.Second)
// 		v, ok := <-ch3
// 		if !ok {
// 			fmt.Println("读完了...", ok)
// 			break
// 		}
// 		fmt.Println("\t读取的数据是:", v)
// 	}
// 	fmt.Println("main...over...")
// }

// func sendData3(ch3 chan string) {
// 	for i := 0; i < 10; i++ {
// 		ch3 <- "数据" + strconv.Itoa(i)
// 		fmt.Println("子goroutine,写出第", i, "个数据")
// 	}
// 	close(ch3)
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 定向通道
// 一、双向通道
// 通道，channel，是用于实现goroutine之间的通信的。一个goroutine可以向通道中发送数据，另一条goroutine可以从该通道中获取数据。截止到现在我们所学习的通道，都是既可以发送数据，也可以读取数据，我们又把这种通道叫做双向通道。
// data := <-a // read from channel a
// a <- data // write to channel a

// 二、单项通道
// 单项通道，也就是定向通道。
// 之前我们学习的通道都是双向通道，我们可以通过这些通道接收或者发送数据。我们也可以创建单项通道，这些通道只能发送或者接收数据。
// 双向通道，示例代码:

// package main

// import "fmt"

// func main() {
// 	// 双向:
// 	// 	chan T -->
// 	// 		chan <- data,写出数据，写
// 	// 		data <- chan,获取数据, 读
// 	// 单向:定向
// 	// 	chan <- T,
// 	// 		只支持写,
// 	// 	<- chan T,
// 	// 		只读
// 	ch1 := make(chan string)
// 	done := make(chan bool)
// 	go sendData(ch1, done)
// 	data := <-ch1
// 	fmt.Println("子goroutine传来:", data)
// 	ch1 <- "我是main..."
// 	<-done
// 	fmt.Println("main...over...")
// }

// func sendData(ch1 chan string, done chan bool) {
// 	ch1 <- "我是小明"
// 	data := <-ch1
// 	fmt.Println("main goroutine传来:", data)
// 	done <- true
// }

// 创建仅能发送数据的通道，示例代码:

// package main

// import "fmt"

// func main() {
// 	ch1 := make(chan int)
// 	go fun1(ch1)
// 	data := <-ch1
// 	fmt.Println("fun1中写出的数据是:", data)

// 	go fun2(ch1)
// 	ch1 <- 200
// 	fmt.Println("main...over...")
// }
// func fun1(ch chan<- int) {
// 	ch <- 100
// 	fmt.Println("fun1函数结束...")
// }
// func fun2(ch <-chan int) {
// 	data := <-ch
// 	fmt.Println("fun2函数，从ch中读取的数据是:", data)
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// time包中的通道相关函数
// 主要就是定时器，标准库中的Time让用户可以定义自己的超时逻辑，尤其是在应对select处理多个channel的超时、单channel读写的超时等情形时尤为方便。
// Timer是一次性的时间触发事件，这点与Ticker不同，Ticker是按一定时间间隔持续触发时间事件。
// Timer常见的创建方式:
// t:=time.NewTimer(d)
// t:=time.AfterFunc(d,f)
// c:=time.After(d)
// 虽然说创建方式不同，但是原理是相同的。
// Timer有3个要素:
// 定时时间:就是那个d
// 触发动作:就是那个f
// 时间channel:也就是t.C

// 一、time.NewTimer()
// NewTimer()创建一个新的计时器，该计时器将在其通道上至少持续d之后发送当前时间。
// 它的返回值是一个Timer。
// 源代码:
// func NewTimer(d Duration) *Timer{
// 	c:=make(chan Time,1)
// 	t:=&Timer{
// 		C:c,
// 		r:runtimeTimer{
// 			when:when(d),
// 			f:sendTime,
// 			arg:c,
// 		},
// 	}
// 	startTimer(&t.r)
// 	return t
// }
// 通过源代码我们可以看出，首先创建一个channel，关联的类型为Time，然后创建了一个Timer并返回。
// ·用于在指定的Duration类型时间后调用函数或计算表达式。
// ·如果只是想指定时间之后执行，使用time.Sleep()
// ·使用NewTimer(),可以返回的Timer类型在计数器到期之后，取消该计时器
// ·直到使用<-time.C发送一个值，该时计时器才会过期。

// 示例代码:
// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	// 1.func NewTimer(d Duration) *Timer
// 	// 	创建一个计时器，d时间以后触发，go触发计时器的方法比较特别，就是在计时器的channel中发送值。
// 	timer := time.NewTimer(3 * time.Second)
// 	fmt.Printf("%T\n", timer)
// 	fmt.Println(time.Now())
// 	ch2 := timer.C
// 	fmt.Println(<-ch2)
// }

// 二、timer.Stop
// 计时器停止:
// 示例代码:

// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	// 1.func NewTimer(d Duration) *Timer
// 	// 	创建一个计时器:d时间以后触发，go触发计时器的方法比较特别，就是在计时器的channel中发送值。
// 	// 新建一个计时器:timer
// 	// timer := time.NewTimer(3*time.Second)
// 	// fmt.Printf("%T\n",timer)
// 	// fmt.Println(time.Now())
// 	// 此处在等待channel中的信号，执行此段代码时会阻塞3秒
// 	// ch2:=timer.C
// 	// fmt.Println(<-ch2)
// 	fmt.Println("----------")
// 	// 新建计时器，一秒后触发
// 	timer2 := time.NewTimer(5 * time.Second)
// 	// 新开启一个线程来处理触发后的事件
// 	go func() {
// 		// 等触发时的信号
// 		<-timer2.C
// 		fmt.Println("Timer 2 end...")
// 	}()
// 	// 由于上面的等待信号是在新线程中，所以代码会继续往下执行，停掉计时器
// 	time.Sleep(3 * time.Second)
// 	stop := timer2.Stop()
// 	if stop {
// 		fmt.Println("Timer 2 stop...")
// 	}
// }

// 三、time.After()
// 在等待持续时间之后，然后在返回的通道上发送当前时间。它相当于NewTimer(d).C。在计时器触发之前，垃圾收集器不会恢复底层计时器。如果效率有问题，使用NewTimer代替，并调用Timer。如果不再需要计时器，请停止。

// After waits for the duration to elapse and then sends the current time
// on the returned channel.
// It is equivalent to NewTimer(d).C.
// The underlying Timer is not recovered by the garbage collector
// until the timer fires.If efficiency is a concern,use NewTimer
// instead and call Timer.Stop if the timer is no longer needed.
// func After(d Duration) <- chan Time{
// 	return NewTimer(d).C
// }

// // 示例代码:
// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	// func After(d Duration)<-chan Time
// 	// 	返回一个通道:chan,存储的是d时间间隔后的当前时间。
// 	ch1 := time.After(3 * time.Second)
// 	fmt.Printf("%T\n", ch1)
// 	fmt.Println(time.Now())
// 	time2 := <-ch1
// 	fmt.Println(time2)
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// select 语句
// select 是Go中的一个控制结构。select语句类似于switch语句，但是select会随机执行一个可运行的case。如果没有case可运行，它将阻塞，直到有case可运行。

// 一、语法结构
// select语句的语法结构和switch语句很相似，也有case语句和default语句:
// select{
// case communication clause:
// 	statement(s);
// case communication clause:
// 	statement(s);
// defer:
// 	statement(s);
// }
// 说明:
// ·每个case都必须是一个通信
// ·所有channel表达式都会被求值
// ·所有被发送的表达式都会被求值
// ·如果有多个case都可以运行，select会随机公平地选出一个执行。其他不会执行。
// ·否则:
// 	如果有default子句，则执行语句。
// 	如果没有default字句，select将阻塞，直到某个通信可以运行;Go不会重新对channel或值进行求值。

// 二、示例代码:
// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	// 分支语句:if,switch,select
// 	// 	select 语句类似于switch语句,
// 	// 	但是select会随机执行一个可执行的case。
// 	// 	如果没有case可运行，它将阻塞，直到有case可运行。
// 	ch1 := make(chan int)
// 	ch2 := make(chan int)

// 	go func() {
// 		time.Sleep(2 * time.Second)
// 		ch2 <- 200
// 	}()

// 	go func() {
// 		time.Sleep(2 * time.Second)
// 		ch1 <- 100
// 	}()

// 	select {
// 	case num1 := <-ch1:
// 		fmt.Println("ch1中取数据...", num1)
// 	case num2, ok := <-ch2:
// 		if ok {
// 			fmt.Println("ch2中取数据...", num2)
// 		} else {
// 			fmt.Println("ch2通道已经关闭...")
// 		}
// 	}
// }

// 运行结果:可能执行第一个case，打印100，也可能执行第二个case，打印200。（多运行几次，记过就不同了。）
// select语句结合time包的和chan相关函数，示例代码:
// package main

// import (
// 	"fmt"
// 	"time"
// )

// func main() {
// 	ch1 := make(chan int)
// 	ch2 := make(chan int)

// 	select {
// 	case <-ch1:
// 		fmt.Println("case1...")
// 	case <-ch2:
// 		fmt.Println("case2...")
// 	case <-time.After(3 * time.Second):
// 		fmt.Println("case3...")
// 	}
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// Go语言的CSP模型
// go语言的最大俩个亮点，一个是goroutine，一个就是chan了。二者合体的典型应用CSP，基本就是大家认可的并行开发神器，简化了并行程序的开发难度，我们来看一下CSP。
// 一、CSP是什么
// CSP是Communicating Sequential Process的简称，中文可以叫做通信顺序进程，是一种并发编程模型，是一个很强大的并发数据模型，是上个世纪七十年代提出的，用于描述俩个独立的并发实体通过共享的通讯channel（管道）进行通信的并发模型。相对于Actor模型，CSP中channel是第一类对象，它不关注发送消息的实体，而关注与发送消息时使用的channel。
// 严格来说，CSP是一门形式语言（类似于calculus），用于描述并发系统中的互动模式，也因此成为一众面向并发的编程语言的理论源头，并衍生出了Occam/Limbo/Golang...
// 而具体到编程语言，如Golang，其实只用到了CSP的很小一部分，即理论中的Process/Channel(对应到语言中的goroutine/channel):这俩个并发原语之间没有从属关系，Process可以订阅任意个Channel，Channel也并关心是哪个Process在利用它进行通信；Process围绕Channel进行读写，形成一套有序阻塞和可预测的并发模型。
// 二、Golang CSP
// 与主流语言通过共享内存来进行并发控制方式不同，Go语言采用了CSP模式。这是一种用于描述俩个独立的并发实体通过共享的通讯Channel（管道）进行通信的并发模型。
// Golang就是借用CSP模型的一些概念为之实现并发进行理论支持，其它从实际上出发，go语言并没有，完全实现了CSP模型的所有理论，仅仅是借用了process和channel这俩个概念。process是在go语言上的表现就是goroutine是实际并发执行的实体，每个实体之间是通过channel通讯来实现数据共享。
// Go语言的CSP模型是由协程Goroutine与通道channel实现:
// ·Go协程goroutine:是一种轻量线程，它不是操作系统的线程，而是将一个操作系统线程分段使用，通过调度器实现协作式调度。是一种绿色线程，微线程，它与Coroutine协程也有区别，能够在发现阻塞后启动新的微线程。
// ·通道channel:类似Unix的Pipe，用于协程之间通讯和同步。协程之间虽然解耦，但是它们和Channel有着藕合。
// 三、Channel
// Goroutine和channel是Go语言并发编程的两大基石。Goroutine用于执行并发任务，channel用于goroutine之间的同步、通信。
// Channel在goroutine间架起了一条管道，在管道里传输数据，实现goroutine间的通信；由于它是线程安全的，所以用起来非常方便；channel还提供“先进先出”的特性；它还能影响goroutine的阻塞和唤醒。
// 相信大家一定见过一句:
// Do not communicate by sharing memory;instead,share memory by communicating.
// 不要通过共享内存来通信，而要通过通信来实现内存共享。
// 这就是Go的并发哲学，它依赖CSP模型，基于channel实现。
// channe实现CSP
// Channel是Go语言中一个非常重要的类型，是Go里的第一对象。通过channel，Go实现了通过通信来实现内存共享。Channel是在多个goroutine之间传递数据和同步的重要手段。
// 使用原子函数、读写锁可以保证资源的共享访问安全，但使用channel更优雅。
// channel字面意义是“通道”，类似于Linux中的管道。声明channel的语法如下:
// chan T
// chan<- T
// <-chan T
// 单向通道的声明，用<-来表示，它指明通道的方向。你只要明白，代码的书写顺序是从左到右就马上能掌握通道的方向是怎样的。
// 因为channel是一个引用类型，所以在它被初始化之前，它的值是nil，channel使用make函数进行初始化。可以向它传递一个int值，代表channel缓冲区的大小（容量），构造出来的是一个缓冲型的channel；不传或传0的，构造的就是一个非缓冲型的channel。
// 两者有一些差别:非缓冲型channel无法缓冲元素，对它的操作一定顺序是“发送->接收->发送->接收->......”,如果想连续向一个非缓冲chan发送2个元素，并且没有接收的话，第一次一定会被阻塞；对于缓冲型channel的操作，则要“宽松”一些，毕竟是带了“缓冲”光环。
// 对chan的发送和接收操作都会在编译期间转换称为底层的发送接收函数。
// Channel分为俩种:带缓冲、不带缓冲。对不带缓冲的channel进行操作实际上可以看作“同步模式”，带缓冲的则称为“异步模式”。
// 同步模式下，发送方法和接收方要同步就绪，只有在两者都ready的情况下，数据才能在两者间传输（后面会看见，实际上就是内存拷贝）。否则，任意一方先进行发送或接收操作，都会被挂起，等待另一方丁而出现才能被唤醒。
// 异步模式下，在缓冲槽可用的情况下（有剩余容量），发送和接收操作都可以顺利进行。否则，操作的一方（如写入）同样会被挂起，直到出现相反操作（如接收）才会被唤醒。
// 小结一下:同步模式下，必须要使发送方和接收方配对，操作才会成功，否则会被阻塞；异步模式下，缓冲槽要有剩余容量，操作才会成功，否则也会被阻塞。
// 简单来说，CSP模型由并发执行的实体（线程或者进程或者协程）所组成，实体之间通过发送信息进行通信，这里发送信息时使用的就是通道，或者叫channel。
// CSP模型的关键是关注channel，而不关注发送消息的实体。Go语言实现了CSP部分理论，goroutine对应CSP中并发执行的实体，channel也就对应着CSP中的channel。
// 四、Goroutine
// Goroutine是实际并发执行的实体，它底层是使用协程（coroutine）实现并发，coroutine是一种运行在用户态的用户线程，类似于greenthread，go底层选择使用coroutine的出发点是因为，它具有以下特点:
// ·用户空间，避免了内核态和用户态的切换导致的成本
// ·可以由语言和框架层进行调度
// ·更小的栈空间允许创建大量的实例
// 可以看到第二条 用户空间想线程的调度不是由操作系统来完成的，像在java1.3中使用的greenthread的是由JVM统一调度的（后java已经改为内核线程），还有在ruby中的fiber（半协程）是需要在重新中自己进行调度的，而goroutine是在golang层面提供了调度器，并且对网络IO库进行了封装，屏蔽了复杂的细节，对外提供统一的语法关键字支持，简化了并发程序编写的成本。
// 五、Goroutine调度器
// Go并发调度:G-P-M模型
// 在操作系统提供的内核线程之上，Go搭建了一个特有的两级线程模型。goroutine机制实现了M:N的线程模型，goroutine机制是协程（coroutine）的一种实现，golang内置的调度器，可以让多核CPU中每个CPU执行一个协程。
// 六、最后
// Golang的channel将goroutine隔离开，并发编程的时候可以将注意力放在channel上。在一定程度上，这个和消息队列的解耦功能还是挺像的。如果大家感兴趣，还是来看看channel的源码吧，对于更深入地理解channel还是挺有用的。
// Go通过channel和goroutine之后，Go的并发编程变得异常容易和安全，得以让程序把注意力留到业务上去，实现开发效率的提升。
// 要知道，技术并不是最重要的，它只是实现业务的工具。一门高效的开发语言让你把节省下来的时间，留着去做更有意义的事情，比如写写文章。

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 反射reflect
// 一、引入
// 先看官方Doc中Rob Pike给出的关于反射的定义:
// Reflection in computing is the ability of a program to examine its own structure,particularly through types;it's a form of metaprogramming.It's also a great source of confusion.
// (在计算机领域，反射是一种让程序——主要是通过类型——理解其自身结构的一种能力。它是元编程的组成之一，同时它也是一大引人困惑的难题。)
// 在计算机科学中，反射是指计算机程序在运行时（Run time）可以访问、检测和修改它本身状态或行为的一种能力。用比喻来说，反射就是程序在运行的时候能够“观察”并且修改自己的行为。
// 不同语言的反射模型不尽相同，有些语言还不支持反射。《Go语言圣经》中是这样定义反射的:
// Go语言提供了一种机制在运行时更新变量和检查它们的值、调用它们的方法，但是在编译时并不知道这些变量的具体类型，这称为反射机制。
// 为什么要用反射
// 需要反射的2个常用场景:
// 1·有时你需要编写一个函数，但是并不知道传给你的参数类型是什么，可能是没约定好;也可能是传入的类型很多，这些类型并不能统一表示。这是反射就会用的上了。
// 2·有时候需要根据某些条件决定调用哪个函数，比如根据用户的输入来决定。这时就需要对函数和函数的参数进行反射，在运行期间动态地执行函数。
// 但是对于反射，还是有几点不太建议使用反射的理由:
// 1·与反射相关的代码，经常是难以阅读的。在软件工程中，代码可读性也是一个非常重要的指标。
// 2·Go语言作为一门静态语言，编码过程中，编译器能提前发现一些类似错误，但是对于反射代码是无能为力的。所以包含反射相关的代码，很可能会运行很久，才会出错，这时候经常是直接panic，可能会造成严重的后果。
// 3·反射对性能影响还是比较大的，比正常代码运行速度慢一到两个数量级。所以，对于一个项目中处于运行效率关键位置的代码，尽量避免使用反射特性。
// 二、相关基础
// 反射是如何实现的？我们以前学习过interface，它是Go语言实现抽象的一个非常强大的工具。当向接口变量赋予一个实体类型的时候，接口会存储实体的类型信息，反射就是通过接口的类型信息实现的，反射建立在类型的基础上。
// Go语言在reflect包里定义了各种类型，实现了反射的各种函数，通过它们可以在运行时检测类型的信息、改变类型的值。在进行更加详细的了解之前，我们呢需要重新温习一下Go语言相关的一些特性，所谓温故知新，从这些特性中了解其反射机制是如何使用的。
// 特点					说明
// go语言是静态类型语言	编译时类型已经确定，比如对以基本数据类型的再定义后的类型，反射时候需要确认返回的是何种类型
// 空接口initerface{}		go的反射机制是要通过接口来进行的，而类似于Java的Object的空接口可以和任何类型进行交互，因此对基本数据类型等的反射也直接利用了这一特点
// Go语言的类型:
// · 变量包括(type、value)两部分
// 	理解这一点就知道为什么 nil!=nil 了
// · type 包括 static type 和 concrete type 简单来说 static type 是你在编码时看见的类型如（如 int、string），concrete type 是 runtime 系统看见的类型
// · 类型断言能否成功，取决于变量的 concrete type，而不是 static type 。因此，一个 reader 变量如果它的 concrete type 也实现了 write 方法的话，它也可以被类型断言为 Writer。
// Go 是静态类型语言。每个变量都拥有一个静态类型，这意味着每个变量的类型在编译时都是确定的: int,float32,*AutoType,[]byte,chan []int 诸如此类。
// 在反射的概念中，编译时就知道变量的类型是静态类型；运行时才知道一个变量的类型叫做动态类型。
// · 静态类型
// 	静态类型就是变量声明时赋予的类型。比如:
// 		type MyInt int
// type A struct{
// 	Name string
// }
// var i int //int 就是静态类型
// 动态类型:运行时给这个变量赋值时，这个值的类型（如果值为nil的时候没有动态类型）。一个变量的动态类型在运行时可能改变，这主要依赖于它的赋值（前提是这个变量是接口类型）。
// go
// var A interface {}
// A = 10
// A = "String"
// var M *int
// A=M

// Go语言的反射就是建立在类型之上的，Golang的指定类型的变量的类型是静态的（也就是指定int、string这些的变量，它的type是static type），在创建变量的时候就已经确定，反射主要与Golang的interface类型相关（它的type是concrete type），只有interface类型才有反射一说。
// 在Golang的实现中，每个interface变量都有一个对应的pair，pair中记录了实际变量的值和类型:
// （value，type）
// value 是实际变量值，type是实际变量的类型。一个interface{}类型的变量包含了2个指针，一个指针指向值的类型【对应concrete type】，另外一个指针指向实际的值【对应value】。
// 例如，创建类型为*os.File的变量，然后将其赋值给一个接口变量r:
// tty,err := os.OpenFile("/dev/tty",os.O_RDWR,0)
// var r io.Reader
// r = tty
// 接口变量r的pair中将记录如下信息:（tty，*os.File）,这个pair在接口变量的连续赋值过程中是不变的，将接口变量r赋给另一个接口变量w:
// var w io.Writer
// w = r.(io.Writer)
// 接口变量w的pair与r的pair相同，都是:（tty，*os.File）,即使w是空接口类型，pair也是不变的。
// interface及其pair的存在，是Golang中实现反射的前提，理解了pair，就更容易理解反射。反射就是用来检测存储在接口变量内部（值value;类型concrete type）pair对的一种机制。
// 所以我们要理解两个基本概念Type和Value，它们也是Go语言包中reflect空间里最重要的两个类型。

// 三、Type和Value
// 我们一般用到的包是reflect包。
// 既然反射就是用来检测存储在接口变量内部（值value;类型concrete type）pair对的一种机制。那么在Golang的reflect反射包中有什么样的方式可以让我们直接获取到变量内部的信息呢？它提供了两张类型（或者说两个方法）让我们可以很容易的访问接口变量内容，分别是reflect.ValueOf()和reflect.TypeOf(),看看官方的解释
// func ValueOf(i interface{}) Value{}
// ValueOf用来获取输入参数接口中的数据的值,如果接口为空则返回0
// func TypeOf(i interface{}) Type{}
// TypeOf用来动态获取输入参数接口中的值的类型，如果接口为空则返回nil
// reflect.TypeOf()是获取pair中的type,reflect.ValueOf()获取pair中的value。
// 首先需要把它转化成reflect对象(reflect.Type或者reflect.Value,根据不同的情况调用不同的函数。)
// t:=reflect.TypeOf(i) // 得到类型的元数据，通过t我们能获取类型定义里面的所有元素
// v:=reflect.ValueOf(i) // 得到实际的值，通过v我们获取存储在里面的值，还可以去改变值

// package main

// import (
// 	"fmt"
// 	"reflect"
// )

// func main() {
// 	// 反射操作:通过反射，可以获取一个接口类型变量的 类型和数值
// 	var x float64 = 3.4
// 	fmt.Println("type:", reflect.TypeOf(x))
// 	fmt.Println("value:", reflect.ValueOf(x))

// 	fmt.Println("--------------------")
// 	// 根据反射的值，来获取对应的类型和数值
// 	v := reflect.ValueOf(x)
// 	fmt.Println("kind is float64:", v.Kind() == reflect.Float64)
// 	fmt.Println("type : ", v.Type())
// 	fmt.Println("value : ", v.Float())
// }

// 说明
// 	1. reflect.TypeOf:直接给到了我们想要的type类型，如float64、int、各种pointer、struct等等真实丁额类型
// 	2. reflect.ValueOf:直接给到了我们想要的具体的值，如1.2345这个具体数值，或者类似&{1 "Allen.Wu" 25}这样的结构体struct的值
// 	3. 也就是说明反射可以将“接口类型变量”转换为“反射类型对象”，反射类型指的是reflect.Type和reflect.Value这两种Type和Value都包含了大量的方法，其中第一个有用的方法应该是Kind，这个方法返回该类型的具体信息:Uint、Float64等。Value类型还包含了一些列类型方法，比如int(),用于返回对应的值。以下是Kind的种类:
// 	type Kind uint
// 	const(
// 		invalid Kind = iota
// 		bool
// 		int
// 		int8
// 		int16
// 		int32
// 		int64
// 		uint
// 		uint8
// 		uint16
// 		uint32
// 		uint64
// 		uintptr
// 		float32
// 		float64
// 		complex64
// 		complex128
// 		array
// 		chan
// 		func
// 		interface
// 		map
// 		ptr
// 		slice
// 		string
// 		struct
// 		unsafepointer
// 	)

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// reflect对象获取接口变量信息
// 一、反射的规则
// 其实反射的操作步骤非常简单，就是通过实体对象获取反射对象（Value、Type），然后操作相应的方法即可。
// 下图描述了实例、Value、Type三者之间的转换关系：
// 反射API的分类总结：
// 1、从实例到Value
// 	通过实例获取Value对象，直接使用reflect.ValueOf()函数。例如：
// 	func ValueOf（i interface {}） Value
// 2、从实例到Type
// 	通过实例获取反射对象的Type，直接使用reflect.TypeOf()函数。例如:
// 	func TypeOf(i interface{}) Type
// 3、从Type到Value
// 	Type里面只有类型信息，所以直接从一个Type接口变量里面是无法获取实例的Value的，但可以通过该Type构建一个新实例的Value。reflect包提供了两种方法，示例如下：
// 	// New 返回的是一个Value,该Value的type为PtrTo(typ),即Value的Type是指定type的指针类型
// 	func New(typ Type) Value
// 	// Zero 返回的是一个 typ 类型的零佳，注意返回的Value不能寻址，位不可改变
// 	func Zero(type Type) Value
// 	如果知道一个类型值的底层存放地址，则还有一个函数是可以依据type和该地址值恢复Value的。例如：
// 	func NewAt(typ Type,p unsafe.Pointer) Value
// 4、从Value到Type
// 	从反射对象Value到Type可以直接调用Value的方法，因为Value内部存放着到Type类型的指针。例如：
// 	func (v Value) Type() type

// 5、从Value到实例
// 	Value本身就包含类型和值信息，reflect提供了丰富的方法来实现从Value到实例的转换。例如：
// 	// 该方法最通用，用来将Value转换为空接口，该空接口内部存放具体类型实例
// 	// 可以使用接口类型查询去还原为具体的类型
// 	func (v Value) Interface() (i interface{})
// 	// Value 自身也提供丰富的方法，直接将Value转换为简单类型实例，如果类型不匹配，则直接引起panic
// 	func (v Value) Bool() bool
// 	func (v Value) Float() float64
// 	func (v Value) Int() int64
// 	func (v Value) Uint() uint64

// 6、从Value的指针到值
// 	从一个指针类型的Value获得值类型Value有俩种方法，示例如下。
// 	// 如果v类型是接口，则Elem()返回接口绑定的实例的Value,如采v类型是指针，则返回指针值的Value，否则引起panic
// 	func (v Value) Elem() Value
// 	// 如果 v 是指针，则返回指针值的 Value，否则返回 v 自身，该函数不会引起 panic
// 	func Indirect(v Value) Value

// 7、Type指针和值的互相转换
// 	指针类型Type到值类型Type。例如：
// 	// t 必须是 Array、Chan、Map、Ptr、Slice，否则会引起 panic
// 	// Elem 返回的是其内部元素的 Type
// 	t.Elem() Type
// 	值类型Type到指针类型Type。例如：
// 	// PtrTo返回的是指向t的指针型Type
// 	func PtrTo(t Type) Type

// 8、Value值的可修改性
// 	Value值的修改涉及如下两个方法：
// 	// 通过 CanSet判断是否能修改
// 	func (v Value) CanSet() bool
// 	// 通过 Set 进行修改
// 	func (v Value) Set(x Value)

// Value值在什么情况下可以修改？我们知道实例对象传递给接口的是一个完全的值拷贝，如果调用反射的方法reflect.ValueOf()传进去的是一个值类型变量，则获得的Value实际上是原对象的一个副本，这个Value是无论如何也不能被修改的。

// 根据Go官方关于反射的博客，反射有三大定律：
// 1、Reflection goes from interface value to reflection object。
// 2、Reflection goes from reflection object to interface value。
// 3、To modify a reflection object，the value must be settable。

// 第一条是最基本的：反射可以从接口值得到反射对象。
// 反射是一种检测存储在inteface中的类型和值机制。这可以通过TypeOf函数和ValueOf函数得到。
// 第二条实际上和第一条是相反的机制，反射可以从反射对象获得接口值。
// 它将ValueOf的返回值通过Interface()函数反向转变成interface变量。
// 前两条就是说接口型变量和反射类型对象可以相互转化，反射类型对象实际上就是指的前面说的reflect.Type和reflect.value。
// 第三条不太好懂：如果需要操作一个反射变量，则其值必须可以修改。
// 反射变量可设置的本质是它存储了原变量本身，这样对反射变量的操作，就会反射到原变量本身；反之，如果反射变量不能代表原变量，那么操作了反射变量，不会对原变量产生任何影响，这会给使用者带来疑惑。所以第二种情况在语言层面是不被允许的。

// 二、反射的使用
// 3.1从reflect.Value中获取接口interface的信息
// 当执行reflect.ValueOf(interface)之后,就得到了一个类型为"reflect.Value"变量，可以通过它本身的interface()方法获得接口变量的真实内容，然后可以通过类型判断进行转换，转换为原有真实类型。不过，我们可能是已知原有类型，也有可能是未知原有类型，因此，下面分两种情况进行说明。
// 已知原有类型
// 已知类型后转换为其对应的类型的做法如下，直接通过interface方法然后强制转换；如下：
// realValue:=value.Interface()(已知的类型)

// package main

// import (
// 	"fmt"
// 	"reflect"
// )

// func main() {
// 	var num float64 = 1.2345
// 	pointer := reflect.ValueOf(&num)
// 	value := reflect.ValueOf(num)
// 	// 可以理解为“强制转换”，但是需要注意的时候，转换的时候，如果转换的类型不完全符合，则直接panic
// 	// Golang 对类型要求非常严格，类型一定要完全符合
// 	// 如下两个，一个是*float64，一个是float64，如果弄混，则会panic
// 	convertPointer := pointer.Interface().(*float64)
// 	convertValue := value.Interface().(float64)

// 	fmt.Println(convertPointer)
// 	fmt.Println(convertValue)
// }

// 说明：
// 1、转换的时候，如果转换的类型不完全符合，则直接panic，类型要求非常严格！
// 2、转换的时候，要区分是指针还是值
// 3、也就是说反射可以将“反射类型对象”再重新转换为“接口类型变量”

// 未知原有类型：
// 很多情况下，我们可能并不知道其具体类型，那么这个时候，该如何做呢？需要我们进行遍历探测其Field来得知，示例如下：
// package main

// import (
// 	"fmt"
// 	"reflect"
// )

// type Person struct {
// 	Name string
// 	Age  int
// 	Sex  string
// }

// func (p Person) Say(msg string) {
// 	fmt.Println("hello,", msg)
// }
// func (p Person) PrintInfo() {
// 	fmt.Printf("姓名:%s,年龄:%d,性别:%s\n", p.Name, p.Age, p.Sex)
// }
// func main() {
// 	p1 := Person{"王二狗", 30, "男"}
// 	DoFiledAndMethod(p1)
// }

// func DoFiledAndMethod(input interface{}) {
// 	getType := reflect.TypeOf(input)            // 先获取input的类型
// 	fmt.Println("get Type is:", getType.Name()) //Person
// 	fmt.Println("get Kind is:", getType.Kind()) // struct
// 	getValue := reflect.ValueOf(input)
// 	fmt.Println("get all Field is:", getValue) //{王二狗 30 男}
// 	// 获取方法字段
// 	// 1.先获取interface的reflect.Type，然后通过NumField进行遍历
// 	// 2.再通过reflect.Type的Field获取其Field
// 	// 3.最后通过Field的Interface()得到对应value
// 	for i := 0; i < getType.NumField(); i++ {
// 		field := getType.Field(i)
// 		value := getValue.Field(i).Interface() //获取第i个值
// 		fmt.Printf("字段名称:%s,字段类型:%s,字段数值:%v\n", field.Name, field.Type, value)
// 	}
// 	// 通过反射，操作方法
// 	// 1.先获取interface的reflect.Type,然后通过.NumMethod进行遍历
// 	// 2.再通过reflect.Type的Method获取其Method
// 	for i := 0; i < getType.NumMethod(); i++ {
// 		method := getType.Method(i)
// 		fmt.Printf("方法名称:%s,方法类型:%v\n", method.Name, method.Type)
// 	}
// }

// 说明
// 通过运行结果可以得知获取未知类型interface的具体变量及其类型的步骤为:
// 1、先获取interface的reflect.Type,然后通过NumField进行遍历
// 2、再通过reflect.Type的Field获取其Field
// 3、最后通过Field的interface()得到对应的value
// 通过运行结果可以得知获取未知类型的interface的所属方法（函数）的步骤为:
// 1、先获取interface的reflect.Type，然后通过NumField进行遍历
// 2、再分别通过reflect.Type的Method获取对应的真实方法（函数）
// 3、最后对结果取其Name和Type得知具体的方法名
// 4、也就是说反射可以将“反射类型对象”再重新转换为“接口类型变量”
// 5、struct或者struct的嵌套都是一样的处理方式

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 通过reflect.Value设置实际变量的值

// reflect.Value是通过reflect.ValueOf(X)获得的,只有当X是指针的时候，才可以通过reflect.Value修改实际变量X的值，即：要修改反射类型的对象就一定要保证其值是“addressable”的。

// 也就是说：要想修改一个变量的值，那么必须通过该变量的指针地址，取消指针的引用。通过refPtrVal:=reflect.Valueof(&var)的方式获取指针类型，你使用refPtrVal.elem().set(一个新的reflect.Value)来进行更改,传递给set()的值也必须是一个reflect.value。

// 这里需要一个方法：
// func(Value)Elem
// func {v Value} Elem() Value

// 解释起来就是:Elem返回接口v包含的值或指针v指向的值。如果v的类型不是interface或ptr，它会恐慌。如果v为零，则返回零值。
// 如果你的变量是一个指针、map、slice、channel、Array。那么你可以使用reflect.Type(v).Elem()来确定包含的类型。

// package main

// import (
// 	"fmt"
// 	"reflect"
// )

// func main() {
// 	var num float64 = 1.2345
// 	fmt.Println("num的数值:", num)
// 	// 需要操作指针
// 	// 通过reflect.ValueOf获取num中的reflect.Value,注意，参数必须是指针才能修改其值
// 	pointer := reflect.ValueOf(&num)
// 	newValue := pointer.Elem()

// 	fmt.Println("类型:", newValue.Type())
// 	fmt.Println("是否可以修改:", newValue.CanSet())

// 	// 重新赋值
// 	newValue.SetFloat(77)
// 	fmt.Println("新的数值:", num)

// 	// 如果reflect.ValueOf的参数不是指针，会如何？
// 	// 尝试直接修改
// 	// value := reflect.ValueOf(num)
// 	// value.SetFloat(6.28)        //panic:reflect:reflect.Value.SetFloat using unaddressable value
// 	// fmt.Println(value.CanSet()) //false

// 	// pointer = reflect.ValueOf(num)
// 	// newValue = value.Elem() // 如果非指针，这里直接panic，“panic：reflect:call of reflect.Value.Elem on float64 Value”
// }
// 说明
// 1、需要传入的参数是*float64这个指针，然后可以通过pointer.Elem()去获取所指向的Value,注意一定要是指针。
// 2、如果传入的参数不是指针，而是变量，那么
// 	·通过Elem获取原始值对应的对象则直接panic
// 	·通过CanSet方法查询是够可以设置返回false
// 3、newValue.CanSet()表示是否可以重新设置其值，如果输出的是true则可修改，否则不能修改，修改完之后再进行打印发现真的已经修改了。
// 4、reflect.Value.Elem()表示获取原始值对应的反射对象，只有原始对象才能修改，当前反射对象是不能修改的
// 5、也就是说如果要修改反射类型对象，其值必须是“addressable”,对应的要传入的是指针，同时要通过Elem方法获取原始值对应的反射对象。
// 6、struct或者struct的嵌套都是一样的判断处理方式。

// 尝试修改结构体重的字段数值:

// package main

// import (
// 	"fmt"
// 	"reflect"
// )

// type Student struct {
// 	Name   string
// 	Age    int
// 	School string
// }

// func main() {
// 	// 通过反射，来更改对象的数值:前提是数据可以被更改
// 	s1 := Student{"王二狗", 19, "千峰教育"}
// 	fmt.Printf("%T\n", s1) //main.Student
// 	p1 := &s1
// 	fmt.Printf("%T\n", p1) //*main.Student
// 	fmt.Println(s1.Name)
// 	fmt.Println((*p1).Name, p1.Name)

// 	v1 := reflect.ValueOf(&s1) // value
// 	if v1.Kind() == reflect.Ptr {
// 		fmt.Println(v1.Elem().CanSet())
// 		v1 = v1.Elem()
// 	}

// 	f1 := v1.FieldByName("Name")
// 	f1.SetString("韩茹")
// 	f3 := v1.FieldByName("School")
// 	f3.SetString("幼儿园")
// 	fmt.Println(s1)
// }

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// 通过reflect.Value来进行方法的调用
// 这算是一个高级用法了，前面我们呢直说到对类型、变量的集中反射的用法，包括如何获取其值、其类型、以及如何重新设置新值。但是在项目应用中，另外一个常用并且属于高级的用法就是通过reflect来进行方法函数的调用。比如我们要做框架工程的时候，需要可以随意扩展方法，或者说用户可以自定义方法，那么我们通过什么手段来扩展让用户能够自定义呢？关键在于用户的自定义方法是未可知的，因此我们可以通过reflect来搞定。

// Call()方法:
// func (Value) Call
// 通过反射，调用方法

// 示例代码:

// package main

// import (
// 	"fmt"
// 	"reflect"
// )

// type Person struct {
// 	Name string
// 	Age  int
// 	Sex  string
// }

// func (p Person) Say(msg string) {
// 	fmt.Println("hello,", msg)
// }
// func (p Person) PrintInfo() {
// 	fmt.Printf("姓名:%s,年龄:%d,性别:%s\n", p.Name, p.Age, p.Sex)
// }
// func (p Person) Test(i, j int, s string) {
// 	fmt.Println(i, j, s)
// }

// // 如何通过反射来进行方法的调用？
// // 本来可以用构造体对象.方法名称()直接调用的.
// // 但是如果要通过反射.
// // 那么首先要将方法注册，也就是MethodByName，然后通过反射调动mv.Call

// func main() {
// 	p2 := Person{"Ruby", 30, "男"}
// 	// 1、要通过反射来调用起对应的方法，必须要先通过reflect.ValueOf(interface)来获取到reflect.Value，得到反射类型对象后才能做下一步处理
// 	getValue := reflect.ValueOf(p2)

// 	// 2、一定要指定参数为正确的方法名
// 	// 先看看没有参数的调用方法

// 	methodValue1 := getValue.MethodByName("PrintInfo")
// 	fmt.Printf("Kind:%s,Type:%s\n", methodValue1.Kind(), methodValue1.Type())
// 	methodValue1.Call(nil) // 没有参数，直接写nil

// 	args1 := make([]reflect.Value, 0) // 或者创建一个空的切片也可以
// 	methodValue1.Call(args1)

// 	// 有参数的方法调用
// 	methodValue2 := getValue.MethodByName("Say")
// 	fmt.Printf("Kind:%s,Type:%s\n", methodValue2.Kind(), methodValue2.Type())
// 	args2 := []reflect.Value{reflect.ValueOf("反射机制")}
// 	methodValue2.Call(args2)

// 	methodValue3 := getValue.MethodByName("Test")
// 	fmt.Printf("Kind:%s,Type:%s\n", methodValue3.Kind(), methodValue3.Type())
// 	args3 := []reflect.Value{reflect.ValueOf(100), reflect.ValueOf(200), reflect.ValueOf("Hello")}
// 	methodValue3.Call(args3)
// }

// 通过反射，调用函数
// 首先我们要先确认一点，函数想普通的变量一样，之前的章节中我们在讲到函数的本质的时候，是可以把函数作为一中变量类型的，而且是引用类型。如果说Fun()是一个函数，那么f1:=Fun也是可以的，那么f1也是一个函数，如果直接调用f1(),那么运行的就是Fun()函数。
// 那么我们就先通过ValueOf()来获取函数的反射对象，可以判断它的Kind,是一个func,那么就可以执行Call()进行函数的调用。
// 示例代码:

// package main

// import (
// 	"fmt"
// 	"reflect"
// )

// func main() {
// 	// 函数的反射
// 	f1 := fun1
// 	value := reflect.ValueOf(f1)
// 	fmt.Printf("Kind:%s,Type:%s\n", value.Kind(), value.Type()) //Kind:func,Type:func()

// 	value2 := reflect.ValueOf(fun2)
// 	fmt.Printf("KInd:%s,Type:%s\n", value2.Kind(), value2.Type()) //Kind:func,Type:func(int,string)

// 	// 通过反射调用函数
// 	value.Call(nil)
// 	value2.Call([]reflect.Value{reflect.ValueOf(100), reflect.ValueOf("hello")})
// }

// func fun1() {
// 	fmt.Println("fun1(),无参")
// }

// func fun2(i int, s string) {
// 	fmt.Println("fun2(),有参")
// }

// 说明:
// 1、要通过反射来调用起对应的方法，必须要先通过reflect.ValueOf(interface)来获取到reflect.Value,得到“反射类型对象”后才能做下一步处理
// 2、reflect.Value.MethodByName这个MethodByName，需要指定准确真实的方法名字，如果错误将直接panic，MethodByName返回一个函数值对应的reflect.Value方法的名字。
// 3、[]reflect.Value,这个是最终需要调用的方法的参数，可以没有或者一个或者多个，根据实际参数来定。
// 4、reflect.Value的Call这个方法，这个方法将最终调用真实的方法，参数务必保持一致，如果reflect.Value.Kind不是一个方法，那么将直接panic。
// 5、本来可以用对象访问方法直接调用的，但是如果要通过反射，那么首先要将方法注册，也就是MethodByName，然后通过反射调用methodValue.Call

// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= =================Goweb框架及实战================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================
// ================================================= ================================================= =================================================

// ================================================= ================================================= =================================================
// ================================================= ====================beego框架==================== =================================================
// ================================================= ================================================= =================================================
package main

import "github.com/astaxie/beego"

func main() {
	beego.Info("beego start")
	beego.Run("localhost:8000")
}
