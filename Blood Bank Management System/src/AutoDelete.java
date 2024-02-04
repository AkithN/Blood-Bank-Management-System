import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.time.LocalDate;

public class AutoDelete {
    /*// Database connection details
    private static final String DB_URL = "jdbc:mysql://localhost:/BLOOD_MS";
    private static final String DB_USERNAME = "root";
    private static final String DB_PASSWORD = "";

    // Table and column names
    private static final String TABLE_NAME = "camp_detail";
    private static final String DATE_COLUMN = "date";*/

     public static void main(String[] args) {
        try {
            // Create a database connection
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:/BLOOD_MS", "root", "");

            // Get today's date
            LocalDate today = LocalDate.now();

            // Construct the SQL statement to delete expired records
            String sql = "delete from camp_detail where date  < ?";

            // Prepare the statement
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setDate(1, java.sql.Date.valueOf(today));

            // Execute the delete statement
            int rowsDeleted = stmt.executeUpdate();

            // Print the number of deleted records
            System.out.println("Deleted " + rowsDeleted + " record(s).");

            // Close the resources
            stmt.close();
            conn.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
