import javax.swing.JOptionPane;

public class Main {
    public static void main(String[] args) {
        Connection cn = new Connection();

        cn.exibirDados();

        if (cn.getDados() != null && !cn.getDados().isEmpty()) {
            JOptionPane.showMessageDialog(null, "Olá, seja bem-vindo(a), " + cn.getDados() + "!");
        } else {
            JOptionPane.showMessageDialog(null, "Olá, seja bem-vindo(a)!");
        }
    }
}