// 冒泡排序
// package main

// import "fmt"

// func main() {
// 	values := []int{4, 93, 84, 85, 80, 37, 81, 93, 27, 12}
// 	fmt.Println(values)
// 	BubbleAsort(values)
// 	BubbleZsort(values)
// }

// func BubbleAsort(values []int) {
// 	for i := 0; i < len(values)-1; i++ {
// 		for j := i + 1; j < len(values); j++ {
// 			if values[i] > values[j] {
// 				values[i], values[j] = values[j], values[i]
// 			}
// 		}
// 	}
// 	fmt.Println(values)
// }

// func BubbleZsort(values []int) {
// 	for i := 0; i < len(values)-1; i++ {
// 		for j := i + 1; j < len(values); j++ {
// 			if values[i] < values[j] {
// 				values[i], values[j] = values[j], values[i]
// 			}
// 		}
// 	}
// 	fmt.Println(values)
// }