<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let title = "{!! $title !!}";
        let full_name = "{!! $full_name !!}";
        let customer_type = "{!! $customer_type !!}";
        let consumption = "{!! $consumption !!}";
        let base_bill = "{!! number_format($base_bill, 2) !!}";
        let fixed_charge = "{!! number_format($fixed_charge, 2) !!}";
        let discount = "{!! number_format($discount, 2) !!}";
        let total_bill = "{!! number_format($total_bill, 2) !!}";

        alert(
            `${title}\n` +
            `Customer Name: ${full_name}\n` +
            `Customer Type: ${customer_type}\n` +
            `Consumption: ${consumption} kwh\n` +
            `Base_bill: ₱${base_bill}\n` +
            `Fixed_charge: ₱${fixed_charge}\n` +
            `Discount: ₱${discount}\n` +
            `total bill: ₱${total_bill}` 
        );

    </script>
    
</body>
</html>