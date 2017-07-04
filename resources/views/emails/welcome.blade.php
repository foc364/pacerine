@extends('beautymail::templates.minty')

@section('content')

	@include('beautymail::templates.minty.contentStart')
		<tr>
			<td class="title">
				Mensagem enviada pelo site Pacerini.
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
			Nome - <?php print $name;?>
			
			</td>
		</tr>
		<tr>
			<td class="paragraph">
			E-mail - <?php print $email;?>
			</td>
		</tr>
		<tr>
			<td class="paragraph">
				Mensagem - <?php print $message2;?>
			</td>
		</tr>
		
	@include('beautymail::templates.minty.contentEnd')

@stop