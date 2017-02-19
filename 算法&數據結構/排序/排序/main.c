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

int main(int argc, const char * argv[]) {
    // insert code here...
    
    int a[5] = {3,5,4,1,2};
    BubbleSort(a, 0, 4);
    
    
    for(int i=0;i<5;i++)
        printf("%3d",a[i]);
    
    printf("\n");
    return 0;
}
