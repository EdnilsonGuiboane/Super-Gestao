<h3> fornecedor</h3>

{{-- Fica o comentario que sera descartado pelo interpretador do blade--}}

@php
  //para comentarios de uma linha
  /*
    para mais linhas
    php puro
  */

@endphp

{{-- @unless executa se o retorno for false --}}
@isset($fornecedores)
  
  @forelse ($fornecedores as $indice => $fornecedor )
          <br>
          
          @dd($loop)
          
          interacao actual ::{{ $loop->iteration }}
          <br>

          Fornecedor: {{ $fornecedor['nome'] }}
          <br>
          Status: {{ $fornecedor['status'] }}
          <br>
          CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado nao preenchido'}}
          <br>
          telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['ddd'] ?? ''}}
          <br>
          @if($loop->first)
              Primeira iteracao do loop 
              <br>
              Total de registro : {{$loop->count}}
          @endif
          <br>
          @if($loop->last)
             Ultima interacao
             <br>
             Total de registros: {{ $loop->count}}
          @endif

          <br>
          
          <hr>
      @empty
          Nao existem fornecedores cadastrados!!    
   @endforelse
   
@endisset

                  