package aula03;
import javax.swing.JOptionPane;

public class SomaJop {
    public static void main(String[] args){
        
        try{
        
        int a = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro número: "));
        
        int b = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo número: "));
        
        int res = a + b;
        
        JOptionPane.showMessageDialog(null, "A soma é " + res);
        
        
        }catch(Exception e){
        JOptionPane.showMessageDialog(null, "Caractere invalido.");
        }
    }
    
}
