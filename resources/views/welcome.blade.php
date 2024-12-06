<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <body>
            <section style="padding-top:100px;">
            <div class="container">
                <div class="row"><div class="col-md-6"><h3>Office Transaction</h3></div>
                <div class="col-md-6"><a href="{{url('add-transaction')}}" style="float: right;" class="btn btn-primary">+Add Transaction</a></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Credit</th>
                                    <th>Debit</th>
                                    <th>Amount</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($alltransaction as $key =>$transaction) { ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo date('m/d/Y',strtotime($transaction->created_at)); ?></td>
                                    <td><?php echo $transaction['description'] ?></td>
                                    <td><?php if($transaction->type==1){ echo "Credit"; } ?></td>
                                    <td><?php if($transaction->type==2){ echo "Debit"; } ?></td>
                                    <td><?php echo $transaction['amount'] ?></td>
                                    <td><?php echo $transaction['balance'] ?></td>

                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
            </section>
        
        </body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
