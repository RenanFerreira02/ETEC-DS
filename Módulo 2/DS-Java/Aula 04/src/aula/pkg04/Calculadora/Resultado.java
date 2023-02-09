package aula.pkg04.Calculadora;

import javax.swing.JOptionPane;

public class Resultado {

    public static void main(String[] args) {

        int o = 0;
        do {
            try {
                o = Integer.parseInt(JOptionPane.showInputDialog("Digite um número para a Operação: \n1 = + \n2 = - \n3 = / \n4 = *"));
                if (o == 1) {
                    funcao w = new funcao();
                    w.soma();
                } else if (o == 2) {
                    funcao x = new funcao();
                    x.sub();
                } else if (o == 3) {
                    funcao y = new funcao();
                    y.div();
                } else if (o == 4) {
                    funcao z = new funcao();
                    z.multip();
                } else {
                    JOptionPane.showMessageDialog(null, "Número invalido.");
                }
            } catch (Exception e) {
                JOptionPane.showMessageDialog(null, "Caractere invalido.");
            }
        } while ((o <= 0) || (o > 4));

    }
}
