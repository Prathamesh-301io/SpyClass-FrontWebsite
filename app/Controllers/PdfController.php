<?php

namespace App\Controllers;

use Mpdf\Mpdf;

class PdfController extends BaseController
{
    public function __construct()
    {
        helper(['filesystem']); // For file path handling, if needed
    }

    /**
     * Generate a PDF with static content.
     */
    public function generatePdf()
    {
        // Define your HTML content
        $html = '<h1>Welcome to CodeIgniter 4</h1><p>This is a sample PDF document.</p>';

        // Set the file path to save the PDF
        $filePath = WRITEPATH . 'pdf/sample.pdf'; // WRITEPATH ensures it's writable

        // Create and configure the mPDF instance
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output($filePath, 'F'); // Save the file to the specified path

        return $this->response->setJSON(['message' => 'PDF has been generated and saved to ' . $filePath]);
    }

    /**
     * Generate a PDF from a view file.
     */
    public function generatePdfFromView()
    {
        // Define the view file and data
        $view = 'orders/view-invoice'; // Don't include ".php", CI4 resolves views automatically
        $data = [
            'title' => 'Welcome to CodeIgniter 4',
            'content' => 'This is a sample PDF document generated from a view.'
        ];

        // Render the view into HTML
        $html = view($view, $data);

        // Set the file path to save the PDF
        $filePath = WRITEPATH . 'pdf/sample-from-view.pdf';

        // Create and configure the mPDF instance
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output($filePath, 'F'); // Save the file to the specified path

        return $this->response->setJSON(['message' => 'PDF has been generated from the view and saved to ' . $filePath]);
    }

    /**
     * Generate an invoice PDF dynamically.
     */
    public function generateInvoicePdf($invoice_id)
    {
        error_reporting(0); 

        // Example data (replace with your logic to fetch dynamic data)
        $data['checkout_data'] = session('checkout_data');

        // Load the view and render HTML
        $html = view('orders/view-invoice-pdf', $data);

        // Set the file path to save the PDF
        $pdfFilePath = WRITEPATH . 'pdf/invoice-' . $invoice_id . '.pdf';

        $tempDir = WRITEPATH . 'mpdf';
        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0755, true); // Create the directory if it doesn't exist
        }
        // Create and configure the mPDF instance
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'margin_top' => 10,
            'margin_bottom' => 10
        ]);

        // Header and Footer
        $mpdf->SetHeader('Invoice|Generated|Page {PAGENO}');
        $mpdf->SetFooter('Your Company | {DATE Y-m-d}|{PAGENO}');

        // Generate the PDF
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, 'F'); // Save the PDF to a file

        return $this->response->setJSON(['message' => 'Invoice PDF generated at ' . $pdfFilePath]);
    }

    /**
     * Capture output from a route or controller method.
     */
    private function _captureRouteOutput($route)
    {
        ob_start();

        // Get the router instance
        $routes = \Config\Services::routes();
        $segments = explode('/', $route);

        // Call the target controller and method
        $controller = '\\App\\Controllers\\' . ucfirst($segments[0]);
        $method = $segments[1] ?? 'index';
        $params = array_slice($segments, 2);

        // Execute the controller's method
        if (class_exists($controller)) {
            $instance = new $controller();
            if (method_exists($instance, $method)) {
                call_user_func_array([$instance, $method], $params);
            }
        }

        $content = ob_get_clean();
        return $content;
    }
}
