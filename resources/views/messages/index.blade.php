<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Chat App</h1>

        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="message">New Message</label>
                <textarea class="form-control" id="message" name="content" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>

        <h2 class="mt-5">Messages</h2>
        <ul class="list-group">
            @foreach($messages as $message)
                <li class="list-group-item">
                    <strong>Message:</strong> {{ $message->content }}
                    <form action="{{ route('messages.reply', $message->id) }}" method="POST" class="mt-2">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="Reply" rows="2" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary">Reply</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
