import java.awt.*;
import javax.swing.*;

public class Kalkulator extends JFrame {
    private JTextField displayField;
    private final String[] buttons = {
        "AC", "()", "%", "/",
        "7", "8", "9", "x",
        "4", "5", "6", "-",
        "1", "2", "3", "+",
        "0", ".", "DEL", "="
    };

    private CalculatorLogic logic = new CalculatorLogic();

    public Kalkulator() {
        setTitle("Kalkulator");
        setSize(320, 430);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        setLayout(new BorderLayout(5, 5));

        // Tampilan input/output
        displayField = new JTextField();
        displayField.setFont(new Font("Consolas", Font.BOLD, 28));
        displayField.setEditable(false);
        displayField.setHorizontalAlignment(SwingConstants.RIGHT);
        add(displayField, BorderLayout.NORTH);

        // Panel tombol
        JPanel buttonPanel = new JPanel(new GridLayout(5, 4, 5, 5));
        for (String text : buttons) {
            JButton button = new JButton(text);
            button.setFont(new Font("Arial", Font.BOLD, 18));
            button.addActionListener(e -> handleButtonClick(text));
            buttonPanel.add(button);
        }

        add(buttonPanel, BorderLayout.CENTER);
        setLocationRelativeTo(null); // tengah layar
        setVisible(true);
    }

    private void handleButtonClick(String text) {
        switch (text) {
            case "AC":
                logic.clear();
                break;
            case "DEL":
                logic.deleteLast();
                break;
            case "=":
                logic.evaluate();
                break;
            default:
                logic.append(text);
        }
        displayField.setText(logic.getDisplayText());
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(Kalkulator::new);
    }

    // Kelas logika kalkulasi
    private class CalculatorLogic {
        private StringBuilder currentExpression = new StringBuilder();

        public void append(String value) {
            switch (value) {
                case "x":
                    currentExpression.append("*");
                    break;
                case "()":
                    // Tambah ( atau ) bergantian
                    int open = countChar('(', currentExpression.toString());
                    int close = countChar(')', currentExpression.toString());
                    currentExpression.append((open > close) ? ")" : "(");
                    break;
                default:
                    currentExpression.append(value);
            }
        }

        public void clear() {
            currentExpression.setLength(0);
        }

        public void deleteLast() {
            int len = currentExpression.length();
            if (len > 0) {
                currentExpression.deleteCharAt(len - 1);
            }
        }

        public void evaluate() {
            try {
                String expr = currentExpression.toString()
                        .replaceAll("[^0-9+\\-*/().%]", "");

                if (expr.isEmpty()) {
                    currentExpression = new StringBuilder("0");
                    return;
                }

                Object result = new javax.script.ScriptEngineManager()
                        .getEngineByName("JavaScript")
                        .eval(expr);

                currentExpression = new StringBuilder(result.toString());
            } catch (Exception e) {
                currentExpression = new StringBuilder("Error");
            }
        }

        public String getDisplayText() {
            return currentExpression.toString();
        }

        private int countChar(char ch, String str) {
            int count = 0;
            for (char c : str.toCharArray()) {
                if (c == ch) count++;
            }
            return count;
        }
    }
}
