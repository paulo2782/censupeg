@extends('layouts.app')
@include('includes/header')
<body>
<section class="container-main">
    <div class="content border border-primary">
      	<div class="top-bar">
	  		<h4 class="mt-4 text-center">{{ $dados[0]->name }}</h4>
      	</div>
      	<div class="line-horizontal"></div>
		<div class="contact-info">
			<h5>Dados Pessoais
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</h5>
			<form class="form-dialog" method="post">
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="nameContact">Nome Completo</label>
						<input type="text" class="form-control-plaintext" id="nameContact" name="name" value="joão manuel marques de carlo" />
					</div>
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="emailContact">Email</label>
						<input type="email" class="form-control-plaintext" id="emailContact" name="email" value="joaomdecarlo@gmail.com" />
					</div>
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="phoneContact">Telefone</label>
						<input type="text" class="form-control-plaintext" id="phoneContact" name="phone" value="48988394210"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-6">
						<label class="h6" for="stateContact">Estado</label>
						<input type="text" class="form-control-plaintext" id="stateContact" name="state" value="SC"/>    
					</div>
					<div class="form-group col-6">
						<label class="h6" for="cityContact">Cidade</label>
						<input type="text" class="form-control-plaintext" id="cityContact" name="city" value="Criciúma"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="schoolContact">Escolaridade</label>
						<input type="text" class="form-control-plaintext" id="schoolContact" name="school" value="Ensino superior completo"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="originContact">Origem do contato</label>
						<input type="text" class="form-control-plaintext" id="originContact" name="origin" value="Palestras/Eventos"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="observation">Informações adicionais</label>
						<textarea class="form-control-plaintext" id="additional_information" name="additional_information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil facilis cum repudiandae tempora quod, atque aspernatur? Repudiandae minima labore unde id hic modi ipsum, voluptatibus deserunt, ut quia nisi a.
						Pariatur soluta inventore odio nesciunt quidem recusandae expedita totam ut quo porro facilis, officia vero voluptas vitae! Illum corrupti similique quod nam eveniet nihil dolores deserunt, placeat quasi nostrum itaque.
						Architecto cupiditate alias maiores illo dolorum facere repellendus incidunt neque hic, id, sint, accusantium sequi quam labore. Voluptatem, magni eius facere quaerat, explicabo totam tempora eos aspernatur, cupiditate debitis ratione.
						Ipsum, odio inventore ipsam debitis officiis eum temporibus facilis distinctio. Velit quia deleniti architecto animi provident molestiae voluptas, voluptatum sed excepturi ab exercitationem alias molestias saepe tempora, inventore cupiditate quis?
						Laboriosam praesentium dolor delectus non dolorem magni, quidem maxime minima rem, iure doloribus architecto. Sequi dolor nihil vel ipsum iste repellat inventore quibusdam. Dolorum magni voluptate maiores eveniet, soluta quasi!
						Quos laboriosam inventore exercitationem dicta amet nihil suscipit voluptas necessitatibus possimus. Itaque deleniti at aperiam blanditiis doloremque est facere, suscipit omnis, architecto cum repudiandae molestiae, praesentium soluta exercitationem in magni?
						Laborum laboriosam dolor eveniet pariatur vitae. Aperiam enim expedita incidunt, quaerat, corporis similique rem magni, fuga omnis corrupti quae veritatis. Labore eveniet nesciunt, praesentium consectetur quaerat quia deleniti pariatur nam.
						Non error, voluptatem sapiente quibusdam vero harum ipsum qui architecto illum molestiae. Necessitatibus voluptatibus veritatis doloribus. Perferendis, recusandae totam explicabo atque, expedita deserunt nesciunt illo iusto quia praesentium beatae nostrum!
						Voluptatibus, qui aliquam suscipit sunt ipsa nobis amet, debitis quibusdam quaerat repellendus dolores quasi adipisci praesentium reiciendis facilis autem officia cum ratione deleniti! Sapiente dolores expedita enim dolore voluptas eos!
						Ad, non voluptates, nulla temporibus deserunt labore impedit odit omnis suscipit dolorem velit sapiente et adipisci exercitationem quae error. Alias voluptatum error repellendus nemo reprehenderit velit quibusdam tempora cumque maxime.
						Laboriosam recusandae, omnis quam eius alias numquam porro cum? Architecto dolorum eligendi reiciendis ad delectus nulla cumque quod eaque cupiditate ipsam debitis repellendus, consectetur qui aspernatur optio nobis dignissimos nesciunt.
						Unde corrupti corporis nemo doloribus placeat, ipsum nostrum facilis incidunt est cum dolor, mollitia illum perferendis aspernatur aut nisi aliquid saepe perspiciatis neque non ratione recusandae. Labore architecto necessitatibus sit!</textarea>
					</div>
				</div>                
			</form>
		</div>
		<div class="line-horizontal"></div>
		<div class="contact-info-courses">
			<h5>Cursos
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</h5>
			<form action="">
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="nameCourse">Curso</label>
						<input type="text" class="form-control-plaintext" id="courseContact" name="nameCourse" value="matemática" />
					</div>
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="typeCourse">Modalidade</label>
						<input type="email" class="form-control-plaintext" id="emailContact" name="typeCourse" value="EAD" />
					</div>
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="levelCourse">Nível</label>
						<input type="text" class="form-control-plaintext" id="phoneContact" name="levelCourse" value="graduação"/>    
					</div>
				</div>
			</form>
		</div>
		<div class="line-horizontal"></div>
		<div class="contact-info-call">
			<h5>Ligações
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</h5>
			<div class="content-table">
			<table class="table-content">
				<thead>
					<tr>
						<th>Data</th>
						<th>Retorno</th>
						<th>Horário</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody id="tabela">
				@foreach($dados as $dado)
					<tr>
						<td>01-01-2020 </td>
						<td>01-09-2020 </td>
						<td>11:00 </td>
						<td>Aguardando retorno</td>
					</tr>
					@endforeach		
				</tbody>
			</table>
      </div>
		</div>
    </div>
</section>
