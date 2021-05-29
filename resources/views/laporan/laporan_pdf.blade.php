<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Laporan PDF</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>                                    
            <tr>
                <th> No </th>
                <th> Nama Tiket </th>
                <th> Qty </th>
                <th> Harga Tiket </th>
                <th> Sub Total </th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; $total=0;  ?>
            @foreach ($laporan as $item)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $item->tiket->nama_tiket }}</td>
                <td>{{ $item->qty }}</td>
                <td>@rupiah($item->tiket->harga_tiket)</td>
                <td>@rupiah($item->qty*$item->tiket->harga_tiket)</td>
            </tr>
            <?php $no++; ?>
            <?php $total = $total+($item->qty*$item->tiket->harga_tiket) ?>
            @endforeach
        <tr>
            <td colspan="4"> <strong>Total</strong> </td>
            <td> <strong>@rupiah($total)</strong> </td>
        </tr>
    </tbody>
    </table>
</body>
</html>