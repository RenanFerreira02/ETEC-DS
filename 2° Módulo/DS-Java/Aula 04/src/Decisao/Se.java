/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Decisao;

import javax.swing.JOptionPane;

public class Se {

    public static void main(String[] args) {
        int idade = Integer.parseInt(JOptionPane.showInputDialog("Digite a sua idade"));

        if (idade < 18) {
            JOptionPane.showMessageDialog(null, "Menor de idade!");

        } else {
            JOptionPane.showMessageDialog(null, "Maior de idade!");
        }

    }
}
