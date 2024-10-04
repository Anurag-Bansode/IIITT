#include<stdio.h>
void main()
{
    int a,b,count=0;
    scanf("%d",&a);
    b =1;
    while(b<=a)
    {
        if(a%b==0)
        {
            count +=1;
        }
        b+=1;
    }
    if(count>2)
        printf("Is is not a prime number");
    else
        printf("It is a prime number");
    
}