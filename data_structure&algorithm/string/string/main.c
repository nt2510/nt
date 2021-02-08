//
//  main.c
//  C算法
//
//  Created by ntlee on 12/02/2017.
//  Copyright © 2017 ntlee. All rights reserved.
//

#include <stdio.h>

/*計算字符串長度*/
int strlenNew(char *s)
{
    //int n;
    //for(n=0;*s != '\0';s++)
    //    n++;
    //return n;
    
    int n;
    for(n = 0;*s != '\0';s++)
        n++;
    return n;

}


/* strncmp函数：将字符串t和s前n个字符进行比较 */
int strncmpNew(char *s,char *t,int n)
{
    for(; *s==*t;*s++,*t++)
        if(*s=='\0' || --n <= 0)
            return 0;
    return *s-*t;
    

}

int main(int argc, const char * argv[]) {
    int n;
    
    //char a[15] = "hello world";
    //char b[15] = "welcome";
    
    
    char s = 'hello world';
    //int len = strlenNew(s);
    printf('s len is %d\n',strlenNew(s));
    return 0;
    
    char a[15] = "12345";
    char b[15] = "123";
    char *p=a,*q=b;
    
    //printf("%s\n",p);
    //return 0;
    
    //n = strncmpNew(p,q,100);
    
    //printf("%d\n",n);
    
    return 0;
    
    
    // insert code here...
    printf("Hello, World!\n");
    return 0;
}
