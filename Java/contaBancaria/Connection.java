import javax.swing.JOptionPane;

public class Connection {

    private String nome;
    private String nomeCorreto = "pedro";
    private String matricula;
    private String telefone;
    private String matriculaCorreta = "2345";
    private String telefoneCorreto = "12345678910";

    public void exibirDados() {

        this.nome = JOptionPane.showInputDialog(null, "Insira seu nome:");
        if (!nome.equals(nomeCorreto)) {
            for (int i = 1; i <= 3; i++) {

                nome = JOptionPane.showInputDialog(null, "Errado! Tentativa " + i + " de 3. Digite novamente:");

                if (nome.equals(nomeCorreto)) {
                    break;
                }

                if (i == 3) {
                    JOptionPane.showMessageDialog(null, "Acesso bloqueado!");
                    System.exit(0);
                }
            }
        }
        this.matricula = JOptionPane.showInputDialog(null, "Insira seu código de matrícula:");

        if (!matricula.equals(matriculaCorreta)) {
            for (int i = 1; i <= 3; i++) {

                matricula = JOptionPane.showInputDialog(null, "Errado! Tentativa " + i + " de 3. Digite novamente:");

                if (matricula.equals(matriculaCorreta)) {
                    break;
                }

                if (i == 3) {
                    JOptionPane.showMessageDialog(null, "Acesso bloqueado!");
                    System.exit(0);
                }
            }
        }

        this.telefone = JOptionPane.showInputDialog(null, "Insira seu número de telefone:");
        if (!telefone.equals(telefoneCorreto)) {
            for (int i = 1; i <= 3; i++) {

                telefone = JOptionPane.showInputDialog(null, "Errado! Tentativa " + i + " de 3. Digite novamente:");

                if (telefone.equals(telefoneCorreto)) {
                    break;
                }

                if (i == 3) {
                    JOptionPane.showMessageDialog(null, "Acesso bloqueado!");
                    System.exit(0);
                }
            }
        }

    }

    public String getDados() {
        return "Nome: " + this.nome +
                "\nMatrícula: " + this.matricula +
                "\nTelefone: " + this.telefone;
    }

    public void setDados(String nome, String matricula, String telefone) {
        this.nome = nome;
        this.matricula = matricula;
        this.telefone = telefone;
    }

}
