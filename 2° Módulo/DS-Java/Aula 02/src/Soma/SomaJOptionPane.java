
package Soma;

import javax.swing.JOptionPane;

import java.lang.Integer;

public class SomaJOptionPane {
    
    public static void main(String[] args) {
        
        int a = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro número: "));
        
        int b = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo número: "));
        
        int res = a + b;
        
        JOptionPane.showMessageDialog(null, "A soma é " + res);
    }
}
