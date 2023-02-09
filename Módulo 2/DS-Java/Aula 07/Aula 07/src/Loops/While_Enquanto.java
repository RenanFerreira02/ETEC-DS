package Loops;

public class While_Enquanto {

    public static void main(String[] args) {

        int i = 0;
        
        int total_par = 0;
        int total_impar = 0;

        while (i <= 100) {

            if ((i % 2) == 0) {
                System.out.println(i + " Par");
                total_par = total_par + i;

            } else {
                System.out.println(i + " Ímpar");
                total_impar = total_impar + i;
            }

            i++;
            
        System.out.println("");
        System.out.println("Total par: " + total_par);
        System.out.println("");

        System.out.println("");
        System.out.println("Total ímpar: " + total_impar);
        System.out.println("");
        
         if (total_par > total_impar) {
            System.out.println("O Total par é maior que o total de ímpar");
        } else {
            System.out.println("O Total ímpar é maior que o total de par");
        }
        }
        
        

    }
}
