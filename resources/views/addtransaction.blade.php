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
                <div class="row"><div class="col-md-6"><h3>New Transaction</h3></div>
                </div>
                <div class="row">
                    <form action="{{route('save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                    <label for="exampleInputEmail1">Transaction Type </label>
                    <select name="typeoftransaction" required class="form-control">
                        <option value="">Choose</option>
                        <option value="1">Credit</option>
                        <option value="2">Debit</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input required type="number" class="form-control" id="amount" name="amount" placeholder="Amount">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea required  class="form-control" id="amount" name="description"></textarea>

                    </div>
                   
                    <button type="submit" style="margin-top:10px" type="submit" class="btn btn-primary">Save</button>
                    <a href="{{url('/')}}" style="margin-top:10px" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
            </section>
        
        </body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
