package ordenando;
 
public class ordenando {

    public static void main(String[] args) {
        int a = 3;
        int b = 2;
        int c = 1;
        
        //Ordem 1A 2B 3C
        if(a < b && b < c && a < c) {
            System.out.println("A B C");
        }
        // Ordem 1A 2C 3B 
        else if (a < b && b > c && c > a){
            System.out.println("A C B");
        }
        // Ordem 1B 2A 3C
        else if(a > b && b < c && c > a ) {
            System.out.println("B A C");
        }
        // Ordem 1B 2C 3A
        else if (a > b && b < c && c < a) {
            System.out.println("B C A");
        }
        // Ordem 1C 2A 3B
        else if (a < b && b > c && c < a) {
            System.out.println("C A B");
        }
        // Ordem 1C 2B 3A
        else if (a > b && b > c && c < a) {
            System.out.println("C B A");
        }
            
            
     
    }
}
