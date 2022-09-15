package Loops;

/**
 *
 * @author CAMARGO
 */
public class Tabuada_For {

    public static void main(String[] args) {
        for (int i = 1; i <= 10; i++) {
            for (int j = 1; j <= 10; j++) {
                int res = i * j;

                System.out.println(i + " X " + j + " = " + res);
            }
            System.out.println("");
        }
    }
}
