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

/*插入排序*//*它的工作原理是通过构建有序序列，对于未排序数据，在已排序序列中从后向前扫描，找到相应位置并插入*/
void InsertSort(Item a[], int left, int right)
{
    int i,j;
    for(i=left+1; i<= right; i++)
        for(j=i; j>left; j--)
            compexch(a[j-1], a[j]);
}

int main(int argc, const char * argv[]) {
    // insert code here...
    
    int a[5] = {3,5,4,1,2};
    //BubbleSort(a, 0, 4);
    InsertSort(a, 0, 4);
    
    
    for(int i=0;i<5;i++)
        printf("%3d",a[i]);
    
    printf("\n");
    return 0;
}
