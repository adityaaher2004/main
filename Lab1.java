public class Lab1{

    public static void Main(){
        double ans1 = celsiusToFahrenheit(98.6);
        double ans2 = billTotal(100);
        double ans3 = pointDistance(0, 0, 0, 1);
        double ans4 = sumOfSquares(3, 4);
        System.out.println(ans1);

    }

    public static double celsiusToFahrenheit(double temp){
        return (5.0/9)*(temp - 32);
    }

    public static double billTotal(double subtotal){
        double tax_total = subtotal * 6.75;
        double tip = tax_total*0.2;
        System.out.println("Taxed Total is: ");
        System.out.print(tax_total);
        System.out.println("Tip is" + tip);
    }

    public static double pointDistance(double x1, double y1, double x2, double y2){
        double distance = Math.pow(Math.pow((x2-x1), 2)+Math.pow((y2 - y1), 2), 0.5);
        return distance;
    }

    public static double sumOfSquares(double x, double y){
        return x*x + y*y;
    }

}