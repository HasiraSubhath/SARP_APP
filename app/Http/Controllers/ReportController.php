<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */public function generateReport()
    {
        // Fetch data from the database
        $data = Report::all(); // Fetch all records, you can adjust this query as needed

        // Define CSV header row
        $csvHeader = ['Column 1', 'Column 2', 'Column 3','Column 4' /* Add more column names */];

        // Initialize CSV data array with header row
        $csvData = [$csvHeader];

        // Add data rows
        foreach ($data as $record) {
            $rowData = [
                $record->column1,
                $record->column2,
                $record->column3,
                $record->column4
                /* Add more columns if needed */
            ];
            $csvData[] = $rowData;
        }

        // Generate CSV file
        $csvFileName = 'report_' . date('Y-m-d') . '.csv';
        $filePath = storage_path('app/' . $csvFileName);
        $file = fopen($filePath, 'w');
        foreach ($csvData as $row) {
            fputcsv($file, $row);
        }
        fclose($file);

        // Return CSV file as downloadable response
        return response()->download($filePath, $csvFileName)->deleteFileAfterSend(true);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
