# XML/HTML Formatter

This PHP script is a simple tool for formatting XML or HTML with proper indentation. It takes input from standard input (stdin), performs formatting, and outputs the result to standard output (stdout). The script also verifies the matching of opening and closing tags in XML.

## Usage

1. Run the script from the command line, providing input through the console:

    ```bash
    php xml_formatter.php < input.xml
    ```

    Where `xml_formatter.php` is the name of your PHP file.

2. Input can be provided in a single line or multiple lines.

## Input Format

The program expects input in XML or HTML format. Input data may contain random formatting (spaces, tabs, etc.).

## Output Format

The output of the program will be formatted with proper indentation for readability.

## Limitations

- The program does not handle syntax errors.
- Only XML and HTML formatting without attributes are supported.

## Example

### Input

```xml
<apply><csymbol encoding="OpenMath"><msub><mi>P</mi><mn>1</mn></msub></csymbol><ci>x</ci></apply>

