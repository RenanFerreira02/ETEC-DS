package dao;

import factory.ConnectionFactory;
import modelo.Usuario;
import java.sql.*;
import java.sql.PreparedStatement;

public class UsuarioDAO {

    private Connection connection;
    Long id;
    String nome;
    String idade;
    String cpf;
    String rg;
    String email;
    String telefone;
    String cep;
    String endereco;
    String estado;
    String bairro;

    public UsuarioDAO() {
        this.connection = new ConnectionFactory().getConnection();
    }

    public void adiciona(Usuario usuario) {
        String sql = "INSERT INTO usuario(nome,idade,cpf,rg,email,telefone,cep,endereco,estado,bairro) VALUES( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";

        try {
            PreparedStatement stmt = connection.prepareStatement(sql);
            stmt.setString(1, usuario.getNome());
            stmt.setString(2, usuario.getIdade());
            stmt.setString(3, usuario.getCpf());
            stmt.setString(4, usuario.getRg());
            stmt.setString(5, usuario.getEmail());
            stmt.setString(6, usuario.getTelefone());
            stmt.setString(7, usuario.getCep());
            stmt.setString(8, usuario.getEndereco());
            stmt.setString(9, usuario.getEstado());
            stmt.setString(10, usuario.getBairro());
            stmt.execute();
            stmt.close();
        } catch (SQLException u) {
            throw new RuntimeException(u);
        }
    }
}
