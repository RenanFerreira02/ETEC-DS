package aula.pkg04.Calculadora;

import javax.swing.JOptionPane;

public class funcao {

    void soma() {
        try {

            int a = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro número para a adição: "));

            int b = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo número: "));

            int res = a + b;

            JOptionPane.showMessageDialog(null, "A soma de " + a + " + " + b + " = " + res);

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Caractere invalido.");
        }

    }

    void sub() {
        try {

            int a = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro número para a subtração: "));

            int b = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo número: "));

            int res = a - b;

            JOptionPane.showMessageDialog(null, "A subtração de " + a + " - " + b + " = " + res);

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Caractere invalido.");
        }
    }

    void div() {
        try {

            double a = Double.parseDouble(JOptionPane.showInputDialog("Digite o primeiro número para a divisão: "));

            double b = Double.parseDouble(JOptionPane.showInputDialog("Digite o segundo número: "));

            double res = a / b;

            JOptionPane.showMessageDialog(null, "A divisão de " + a + " / " + b + " = " + res);

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Caractere invalido.");
        }
    }

    void multip() {
        try {

            int a = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro número para a multiplicação: "));

            int b = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo número: "));

            int res = a * b;

            JOptionPane.showMessageDialog(null, "A multiplicação de " + a + " X " + b + " = " + res);

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Caractere invalido.");
        }
    }
}
