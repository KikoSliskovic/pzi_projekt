<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dodavanje nove lekcije u Bazu podataka</h1>
    <form method="post" action="{{route('lectures.store')}}">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="classroom">Odabir učionice:</label>
            <select name="classroom_id" id="classroom" class="form-control" required>
                <option value="">Odaberite učionicu</option>
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="subject">Odabir kolegija:</label>
            <select name="subject_id" id="subject" class="form-control" required>
                <option value="">Odaberite kolegij</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="professor">Odabir profesora:</label>
            <select name="professor_id" id="professor" class="form-control" required>
                <option value="">Odaberite professora</option>
                @foreach ($professors as $professor)
                    <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>User_ID: </label>
            <input type="name" name="name" placeholder="npr. 10" />
        </div>
        
        <div>
            <input type="submit" value="Spremi" />
    
            <a href="{{route('lectures.index')}}">
                <input type="button" value="Natrag" style="margin-top: 5px"/>
            </a>
        </div>
    </form>

    <div>
        @if($errors->any())
        <h4 bold>Pronađeni problemi pri dodavanju:</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <br>
        <br>
        <br>
        
        @endif
    </div>
</body>
</html>