//
//  main.c
//  排序
//
//  Created by ntlee on 19/02/2017.
//  Copyright © 2017 ntlee. All rights reserved.
//

#include <stdio.h>
#include <stdlib.h>
typedef int Item;

#define key(A) (A)
#define less(A,B) (key(A) < key(B))
#define exac(A,B) { Item t=A;A=B;B=t; }
#define compexch(A,B) if(less(B,A)) exac(A,B);

/*冒泡排序*/
void BubbleSort(Item a[],int left, int right)
{
    int i,j;
    for(i=left;i<right;i++)
        for(j=right;j>i;j--)
            compexch(a[j-1],a[j]);
}

/*插入排序*/
/*它的工作原理是通过构建有序序列，对于未排序数据，在已排序序列中从后向前扫描，找到相应位置并插入
1. 从第一个元素开始，该元素可以认为已经被排序
2. 取出下一个元素，在已经排序的元素序列中从后向前扫描
3. 如果该元素（已排序）大于新元素，将该元素移到下一位置
4. 重复步骤3，直到找到已排序的元素小于或者等于新元素的位置
5. 将新元素插入到该位置中
6. 重复步骤2~5*/
void InsertSort(Item a[], int left, int right)
{
    int i,j;
    for(i=left+1; i<= right; i++)
        for(j=i; j>left; j--)
            compexch(a[j-1], a[j]);
}

/*選擇排序*/
/*將要排序的對象分作兩部份，一個是已排序的，一個是未排序的。如果排序是由小而大，從後端未排序部份選擇一個最小值，並放入前端已排序部份的最後一個。*/
void SelectionSort(Item a[], int left, int right)
{
    int i,j;
    for(i=left;i<=right;i++)
    {
        int min = i;
        for(j=i+1;j<=right;j++)
            if(less(a[j],a[min])) min=j;
        exac(a[i],a[min]);
    }
}

int main(int argc, const char * argv[]) {
    // insert code here...
    
    int a[5] = {3,5,4,1,2};
    //BubbleSort(a, 0, 4);
    //InsertSort(a, 0, 4);
    SelectionSort(a, 0, 4);
    
    for(int i=0;i<5;i++)
        printf("%3d",a[i]);
    
    printf("\n");
    return 0;
}
