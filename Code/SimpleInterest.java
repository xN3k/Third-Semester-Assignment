import java.util.Scanner;

public class SimpleInterest {

    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);

        System.out.println("Enter Principle Amount: ");
        double principle = sc.nextDouble();                         // Take the Principal amount
        
        System.out.println("Enter the rate of interest");
        double rate = sc.nextDouble();                              // Take the rate of interest
        
        System.out.println("Enter time period: ");
        double time = sc.nextDouble();                              // Take the time period

        double si = (principle * rate * time) / 100;                // Calculate the Simple Interest

        System.out.println("Simple Interest = " + si);
        sc.close();
    }
}
