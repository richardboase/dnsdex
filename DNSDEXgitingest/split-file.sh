#!/bin/bash

# Define absolute paths
input_file="/Users/FRESH/Downloads/NEXT-main 2/docs/dev/dnsdex/DNSDEX-gitingest.txt"
output_dir="/Users/FRESH/Downloads/NEXT-main 2/docs/dev/dnsdex"
total_chunks=100

# Check if input file exists
if [ ! -f "$input_file" ]; then
    echo "Error: Input file '$input_file' not found"
    exit 1
fi

# Get total number of lines
total_lines=$(wc -l < "$input_file") || {
    echo "Error: Failed to count lines in input file"
    exit 1
}

# Calculate lines per chunk
lines_per_chunk=$(( (total_lines + total_chunks - 1) / total_chunks ))

echo "Splitting file with $total_lines lines into $total_chunks chunks"
echo "Approximately $lines_per_chunk lines per chunk"

# Split the file using macOS compatible options
cd "$output_dir" && split -l "$lines_per_chunk" "$input_file" "part-" || {
    echo "Error: Failed to split file"
    exit 1
}

# Rename files from aa, ab, ac, etc. to numbered sequence
i=1
for file in "$output_dir"/part-*; do
    if [ -f "$file" ]; then
        new_name="$output_dir/part-$(printf "%03d" $i).txt"
        mv "$file" "$new_name" || {
            echo "Error: Failed to rename $file"
            continue
        }
        ((i++))
    fi
done

echo "Split complete. Files are in $output_dir" 