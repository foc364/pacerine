<?php

use Illuminate\Database\Seeder;
use Pacerini\Models\Contact;
use Pacerini\Models\TextEnglish;
use Pacerini\Models\TextPortuguese;
use Pacerini\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();
        DB::table('texts_english')->truncate();
        DB::table('texts_portuguese')->truncate();
        DB::table('users')->truncate();


        $user = new User;

        $user->name = 'Admin';
        $user->email = 'site@pacerini.com';
        $user->password = bcrypt('pacerini2017');

        $user->save();

        $contact = new Contact;
        $contact->phone = '55 (11) 99184-2993';
        $contact->phone_2= '55 (11) 5062-5842';
        $contact->email= 'bruno@pacerini.pe.hu';
        $contact->save();

        $texts_english = new TextEnglish;
        $texts_english->about = '<p>
        I have graduated with an honors degree in Architecture and Urbanism, from the Mackenzie Presbyterian University in Sao Paulo. I have also completed a master in Building  technology from the Polytechnic University of Catalonia in Barcelona .
I am looking to gain more practical and theoretical experience within this sector. I am interested in all aspects from Design and Implementation to the ongoing maintenance of construction projects.
</p>';


        $texts_english->about_li = 'Graduated Mackenzie Presbyterian University';
        $texts_english->about_li_2 = 'master in Building  technology from the Polytechnic University of Catalonia in Barcelona';
        $texts_english->about_li_3 = 'Inglês Fluente';

    $texts_english->about_experience = '<h2>Experiências Profissionais</h2>
    <p>
    I have experience gained both at University as well as externally in developing and implementing small, medium and large scale construction designs relating to housing, hotels, banks, commercial and institutional buildings (as well as other related projects).

 
I have extensive experience using the following graphic design software; Autocad 2D & 3D, Photoshop, 3D Studio Max, Sketchup, Revit and Microsoft Office Applications.I have been lucky enough to work alongside some seasoned professionals whilst completing projects for bank agencies like Caixa Econômica Federal, Santander, Accor Hotels, The Heritage Foundation of the Energy and Sanitation of Sao Paulo; which consists of Sabesp, CESP, Electropaulo and Comgas, companies that supply energy for almost whole state of Sao Paulo. This experience coupled with my knowledge of design and implementation has given me a good all round understanding of how to design and more importantly, deliver; successful , creative and innovative projects.
    </p>';

    $texts_english->about_conclusion ='<h2>Conclusion</h2>
    <p>Also I worked on a self-employed basis. One of my contracts was to oversee the construction and expansion of some residential areas, working alongside with a Civil Engineer, we designed all structural systems; including plumbing, electricity, coatings, roofing and interior design. I was also heavily involved in a many bank agencies projects and commercial ones, where I designed a public house, developing furniture to scale rooms of residence.
    </p>';


    $texts_english->service_1 = '<h4 class="media-heading">Proposal Preparation</h4>

<p>
The carrying out of proposals, schematic design (Draft) and some 3D images,
subject to customer requirements and the technical feasibility proposal of the
architect in charge.
</p>';

    $texts_english->service_2 = '<h4 class="media-heading">Property survey or existing ground existente</h4>
            <p>
          Physical survey of the existing property, and transcription to computer of the measurements of the floor plan, the different sections and the elevations needed in order to carry out the proposed reform or new plants. The survey will take a photographic archive.

            </p>';

     $texts_english->service_3 = '<h4 class="media-heading">Technical report</h4>
            <p>
            Administrative technical report containing data of properties and their current situation, and showing that the proposal of the unit is exposed to the estimated cost aspects of new property legislation and technical feasibility.

            </p>';

     $texts_english->service_4 = ' <h4 class="media-heading">Construction documentation</h4>
            <p>
            Construction documentation project, air conditioning, electrics and structure for implementation in the field.

            </p>';

     $texts_english->service_5 = '<h4 class="media-heading">Cost management</h4>
            <p>
            Estimated cost sheet, taking into account what will be spent on the architectural project, air conditioning, electrics and structure. The schedule should be discussed with the head of construction.
            </p>';

    $texts_english->service_6 = '<h4 class="media-heading">Carry out site inspections</h4>
            <p>
            Weekly visits to the site where the work is being carried out to see if the construction is on schedule and the stipulations in the executive report are being met. The customer will get a work report containing a photographic archive of each visit.
            </p>';

     $texts_english->service_7 = ' <h4 class="media-heading">Legalization of property</h4>
            <p>
            Weekly visits to the corresponding council, with the objective of availability and legalizing the property in their city.
            </p>';

    $texts_english->schedule = 'Attendance: from monday to friday, 9:00 am - 6:00 pm.';



    $texts_english->save();



    $texts_portuguese = new TextPortuguese;

        $texts_portuguese->about = '<p>
        Graduado em Arquitetura e Urbanismo pela Universidade Presbiteriana Mackenzie e pós graduado pela Universitat Politécnica de la Catalunya em Tecnologia da Edificação venho desenvolvendo e executando projetos ligados à construção civil de pequeno, médio e grande porte, que incluem projetos de edifícios residenciais, comerciais, institucionais, agências bancarias e residência uni-familiares. Todos com o auxílio de instrumentos de representação gráfica como AutoCad 2D, 3D, Photoshop, 3D Studio, Revit, o pacote Office em geral entre outros.
        </p>';

        $texts_portuguese->about_li = 'Graduação Universidade Presbiteriana Mackenzie';
        $texts_portuguese->about_li_2 = 'Pós-graduação pela Universitat Politécnica de la Catalunya';
        $texts_portuguese->about_li_3 = 'Inglês Fluente';

    $texts_portuguese->about_experience = '<h2>Experiências Profissionais</h2>
    <p>
    Essas experiências profissionais foram aplicadas através de oportunidades que tive junto ao Unibanco, Caixa Economica Federal, Banco do Brasil, rede Accor de hotéis, a Fundação Patrimônio Histórico da Energia e Saneamento que engloba (Sabesp, Cesp, Eletropaulo, Comgás), a alguns escritórios de arquitetura e clientes particulares. Sempre projetando e fiscalizando a execução de empreendimentos, que me proporcionaram um contato direto com toda infra-estrutura básica presente em um ambiente que visa atender uma grande demanda.
    </p>';

    $texts_portuguese->about_conclusion ='<h2>Conclusão</h2>
    <p>
    Finalmente tenho como meta ampliar meus conhecimentos junto à construção civil, tanto no âmbito teórico com a execução de novos cursos e futuramente um mestrado em tecnologia da edificação, quanto através de mais experiências práticas de fiscalização e organização de empreendimentos, com o objetivo de me tornar cada vez mais apto à realização e execução de um bom projeto arquitetonico.
    </p>';

    $texts_portuguese->service_1 = '<h4 class="media-heading">Elaboração da proposta</h4>

<p>
Proposta de layout (Ante projeto) e algumas imagens em 3D, condicionadas aos desejos do cliente a viabilidade técnica do arquiteto responsável.
</p>';

    $texts_portuguese->service_2 = '<h4 class="media-heading">Levantamento do imóvel ou terreno existente</h4>
            <p>
            Levantamento físico do imóvel existente e transcrição ao computador com as medidas em planta baixa, cortes e elevações necessárias para a realização da proposta de reforma ou de novas instalações. 
            O levantamento terá arquivo fotográfico.
            </p>';

     $texts_portuguese->service_3 = '<h4 class="media-heading">Relatório técnico</h4>
            <p>
            Relatório técnico administrativo contendo dados do imóvel, situação atual, qual será a proposta para a unidade, uma estimativa de custo, aspectos relativos a legalização do novo imóvel e sua viabilidade técnica.
            </p>';

     $texts_portuguese->service_4 = ' <h4 class="media-heading">Projeto para execução em obra</h4>
            <p>
            Projeto executivo de civil, arquitetura, elétrica e ar condicionado, tornando o projeto apto para a execução em obra.
            </p>';

     $texts_portuguese->service_5 = '<h4 class="media-heading">Planilha de custo</h4>
            <p>
            Planilha estimada de custo da obra, levando em consideração o que será gasto com civil, elétrica e ar condicionado, além de um cronograma de obra que deverá ser discutido com o responsável pela execução.
            </p>';

    $texts_portuguese->service_6 = '<h4 class="media-heading">Vistoria em obra</h4>
            <p>
            Vistorias semanais ao local onde está sendo feita a obra, para verificar se a construtora está seguindo o cronograma e o que foi estipulado no projeto executivo. O cliente receberá um relatório de obra contendo um arquivo fotográfico de cada vistoria.
            </p>';

     $texts_portuguese->service_7 = ' <h4 class="media-heading">Legalização do imóvel</h4>
            <p>
            Visitas semanais a subprefeitura correspondente, visando a legalização do imóvel junto a prefeitura.
            </p>';

    $texts_portuguese->schedule = 'Atendimento de segunda a sexta feira, das 9 às 18h.';


    $texts_portuguese->save();

    }
}
