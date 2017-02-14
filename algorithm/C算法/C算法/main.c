//
//  main.c
//  C算法
//
//  Created by ntlee on 12/02/2017.
//  Copyright © 2017 ntlee. All rights reserved.
//

#include <stdio.h>

/* strncmp函数：将字符串t和s前n个字符进行比较 */
int strncmpNew(char *s,char *t,int n)
{
    for(; *s==*t;*s++,*t++)
        if(*s=='0' || --n <= 0)
            return 0;
    return *s-*t;
    

}

int main(int argc, const char * argv[]) {
    int n;
    
    char a[15] = "hello world";
    char b[15] = "welcome";
    char *p=a,*q=b;
    
    n = strncmpNew(p,q,2);
    
    printf("%d\n",n);
    
    return 0;
    
    
    // insert code here...
    printf("Hello, World!\n");
    return 0;
}
