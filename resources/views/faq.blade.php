@include('layout.header')

<section id="faq" class="faq py-5">
    <div class="container">
      <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
      <div class="accordion" id="faqAccordion">
  
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
              ¿Cómo sé qué talle elegir?
            </button>
          </h2>
          <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Te recomendamos consultar nuestra <a href="/guia_talles">guía de talles</a> para asegurarte de que eliges la camiseta perfecta para ti. Las medidas específicas están detalladas en centímetros y pulgadas.
            </div>
          </div>
        </div>
  
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
              ¿Realizan envíos internacionales?
            </button>
          </h2>
          <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Sí, realizamos envíos internacionales. Los costos y tiempos de envío varían según el país de destino. Puedes calcular el costo del envío al momento de realizar tu pedido.
            </div>
          </div>
        </div>
  
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
              ¿Qué métodos de pago aceptan?
            </button>
          </h2>
          <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Aceptamos tarjetas de crédito y débito (Visa, MasterCard, American Express), transferencias bancarias y pagos a través de plataformas como PayPal y MercadoPago.
            </div>
          </div>
        </div>
  
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
              ¿Puedo personalizar mi camiseta?
            </button>
          </h2>
          <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              ¡Por supuesto! Ofrecemos la opción de personalización para la mayoría de nuestras camisetas. Puedes agregar tu nombre, número y/o parches adicionales. El costo adicional se mostrará al momento de realizar el pedido.
            </div>
          </div>
        </div>
  
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
              ¿Qué hago si mi pedido llega en mal estado?
            </button>
          </h2>
          <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Si tu pedido llega en mal estado, <a href="/contacto">contáctanos</a> dentro de los primeros 7 días hábiles desde que lo recibiste. Nuestro equipo de atención al cliente te ayudará a solucionar el problema y te ofrecerá una reposición o reembolso según corresponda.
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  
  @include('layout.footer')