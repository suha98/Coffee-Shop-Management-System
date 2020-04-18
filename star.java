import java.util.Scanner;
public class HelloWorld{

     public static void main(String []args){
        Scanner scr = new Scanner (System.in);
        System.out.println("Please enter the number of rows");
        int n = scr.nextInt();
        for (int i =1; i<=n; i++){
            for (int j =1; j<=i; j++)
        {
            
            System.out.print("*");
            
        }
        System.out.println();
        }
        
        
     }
}