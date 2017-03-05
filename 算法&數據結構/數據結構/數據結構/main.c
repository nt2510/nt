//
//  main.c
//  數據結構
//
//  Created by ntlee on 19/02/2017.
//  Copyright © 2017 ntlee. All rights reserved.
//

#include <stdio.h>
#include <string.h>
#include <stdlib.h>




int main(int argc, const char * argv[]) {
    // insert code here...
    printf("Hello, World!\n");
    create();
    return 0;
}

typedef struct student
{
    int data;
    struct student *next;
} node;

node *create()
{
    node *head,*p,*n;
    int x,cycle=1;
    head = (node *)malloc(sizeof(node));
    p = head;
    while(cycle){
        printf("\nplease input the data");
        scanf("\d",&x);
        if(x!=0){
            s = (node *)malloc(sizeof(node));
            s->data = x;
            printf("\n%d",s->data);
            p->next = s;
            p = s;
        }
        else cycle = 0;
        
    }
    head = head->next;
    p->next = null;
    printf("\n yyy %d",head->data);
    return (head);
}




