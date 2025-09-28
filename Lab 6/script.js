// Function to perform calculator operations
function calculate(operation) {
 // Get input values
 const num1 = parseFloat(document.getElementById('num1').value);
 const num2 = parseFloat(document.getElementById('num2').value);
 let result;
 // Perform calculations based on the operation
 switch(operation) {
 case 'sum':
 result = num1 + num2;
 break;
 case 'difference':
 result = num1 - num2;
 break;
 case 'product':
 result = num1 * num2;
 break;
 case 'quotient':
 result = num1 / num2;
 break;
 case 'remainder':
 result = num1 % num2;
 break;
 case 'power':
 result = Math.pow(num1, num2);
 break;
 case 'square':
 result = Math.pow(num1, 2); // Square of the first number
 break;
 case 'sqrt':
 result = Math.sqrt(num1); // Square root of the first number
 break;
 default:
 result = 'Invalid operation';
 }
 // Display the result
 document.getElementById('result').value = result;
}