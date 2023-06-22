<div>
    @if ($transcriptions)
        @foreach ($transcriptions as $transcription)
            @if ($currentTime >= $transcription['start'] && $currentTime <= $transcription['end'])
                <p><strong style="font-size: 20px;">{{ $transcription['text'] }}</strong></p>
            @else
                <p style="font-size: 18px;">{{ $transcription['text'] }}</p>
            @endif
        @endforeach
    @else
        <p>Loading...</p>
    @endif
</div>

<script>
    // Obtener el elemento del texto resaltado
    var highlightedTextElement = document.querySelector('strong[style="font-size: 20px;"]');
  
    // Verificar si el elemento existe
    if (highlightedTextElement) {
        // Hacer scroll hacia el elemento resaltado
        highlightedTextElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
</script>

