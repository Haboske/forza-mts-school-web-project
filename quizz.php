<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="content/css/quizz.css">
</head>
<body>
    <div class="quizz_popup">
        <div class="quizz_intro">
            <h1>Bienvenue sur le quizz du Forza Community Club</h1>
            <div class="quizz_intro_desc">
                <p>L'objectif est simple, répondez à un formulaire de 10 questions</p>
                <p>Au plus vous aurez de bonnes réponses, au plus votre score sera élevé</p>
                <p>Si vous arrivez à faire un score de 10 points,  une petite surprise vous attends</p>
            </div>
            <button class="quizz_intro_button">C'est parti !</button>
        </div>
        <div class="quizz_form">
            <div class="quizz_form_section">


                <!-- QUESTION 1 -->


                <div class="quizz_form_question form1">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>En quelle année est apparu le premier jeu forza ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question1_answer1" name="question1" class="question1">
                                <label for="question1_answer1">1789</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question1_answer2" name="question1" class="question1">
                                <label for="question1_answer2">1933</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question1_answer3" name="question1" class="question1">
                                <label for="question1_answer3">2005</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question1_answer4" name="question1" class="question1">
                                <label for="question1_answer4">2010</label>    
                            </div>
                        </div>

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Le premier jeu Forza est apparu en 2005, il est développé par le Studio "Turn 10 Studio" qui développera par la suite les 7 autres opus de la franchise "Forza Motorsport"</feedback>
                        
                        </div>

                    </div>

                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->

                    <div class="button_right_margin">
                        <button name="question1" value="validate" id="question1_button" data-status="not-over">Valider ma réponse</button> 
                    </div>

                </div>


                <!-- QUESTION 2 -->


                <div class="quizz_form_question form2">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>Combien il y a-t-il eu de jeu forza motorsports ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question2_answer1" name="question2" class="question2">
                                <label for="question2_answer1">2</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question2_answer2" name="question2" class="question2">
                                <label for="question2_answer2">5</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question2_answer3" name="question2" class="question2">
                                <label for="question2_answer3">8</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question2_answer4" name="question2" class="question2"> 
                                <label for="question2_answer4">10</label>        
                            </div>
                        </div>

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Au total il y a eu 8 jeux Forza motorsport. Même si le dernier n’a pas de numéro, il s’agit bien du 8ème de la série. Il ne faut pas confondre motorsport et Horizon, ces derniers sont aux nombre de 5. </feedback>
                        
                        </div>

                    </div>

                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->
                    
                    <div class="button_right_margin">
                        <button name="question2" value="validate" id="question2_button" data-status="not-over">Valider ma réponse</button> 
                    </div> 
    
                </div>


                <!-- QUESTION 3 -->


                <div class="quizz_form_question form3">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>En quelle année remonte la dernière victoire de Ferrari aux 24h du mans ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question3_answer1" name="question3" class="question3">
                                <label for="question3_answer1">1965</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question3_answer2" name="question3" class="question3">
                                <label for="question3_answer2">1993</label>           
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question3_answer3" name="question3" class="question3">
                                <label for="question3_answer3">2015</label>          
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question3_answer4" name="question3" class="question3">
                                <label for="question3_answer4">2023</label>             
                            </div>
                        </div> 

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>La dernière victoire de Ferrari aux 24h du Mans date de 2023 ! Eux qui n’avaient pas participé depuis 1973 et gagné depuis 1965 (dans la catégorie reine des 24h) ont gagné pour leur retour !</feedback>
                        
                        </div>
                        
                    </div>

                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->
                    
                    <div class="button_right_margin">
                        <button name="question3" value="validate" id="question3_button" data-status="not-over">Valider ma réponse</button> 
                    </div>
    
                </div>


                <!-- QUESTION 4 -->


                <div class="quizz_form_question form4">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>Quel pilote de F1 détient le plus grand nombre de victoire ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question4_answer1" name="question4" class="question4">
                                <label for="question4_answer1">Vettel</label>      
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question4_answer2" name="question4" class="question4">
                                <label for="question4_answer2">Schumacher</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question4_answer3" name="question4" class="question4">
                                <label for="question4_answer3">Hamilton</label>                         
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question4_answer4" name="question4" class="question4">
                                <label for="question4_answer4">Verstappen</label>                       
                            </div>
                        </div>

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>C’est Lewis Hamilton qui possède le plus grand palmarès en F1 avec 103 victoires contre 91 pour Schumacher, 53 pour Vettel et 51 Verstappen.</feedback>
                        
                        </div>

                    </div>

                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->

                    <div class="button_right_margin">
                        <button name="question4" value="validate" id="question4_button" data-status="not-over">Valider ma réponse</button> 
                    </div>
    
                </div>


                <!-- QUESTION 5 -->


                <div class="quizz_form_question form5">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->
                        
                        <p>Combien il y a-t-il de voiture dans le dernier jeu Forza Motorsport lors de sa sortie ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question5_answer1" name="question5" class="question5">
                                <label for="question5_answer1">518</label>                     
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question5_answer2" name="question5" class="question5">
                                <label for="question5_answer2">369</label>                           
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question5_answer3" name="question5" class="question5">
                                <label for="question5_answer3">248</label>                    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question5_answer4" name="question5" class="question5">
                                <label for="question5_answer4">684</label>                        
                            </div>
                        </div> 
    
                        <!-- FEEDBACK -->
    
                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Il y a un total de 518 voitures présente de base dans le jeu. Cependant, une grande partie de ces voitures sont les mêmes que dans les jeux précédents.</feedback>
                        
                        </div>

                    </div>

                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->

                    <div class="button_right_margin">
                        <button name="question5" value="validate" id="question5_button" data-status="not-over">Valider ma réponse</button> 
                    </div>
    
                </div>


                <!-- QUESTION 6 -->

                
                <div class="quizz_form_question form6">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>Quel est le circuit le plus long (en km) du jeu Forza Motorsport ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question6_answer1" name="question6" class="question6">
                                <label for="question6_answer1">Nürburgring GP</label>                    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question6_answer2" name="question6" class="question6">
                                <label for="question6_answer2">Le Mans</label>                  
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question6_answer3" name="question6" class="question6">
                                <label for="question6_answer3">Spa-Francorchamps</label>                       
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question6_answer4" name="question6" class="question6">
                                <label for="question6_answer4">Suzuka Circuit</label>                        
                            </div>
                        </div>

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Le circuit le plus long est le mans avec 13.6km contre 6.9km pour SPA-Francorchamps, 5.8km pour Suzuka et 5.1km pour le Nurburgring GP. Attention a ne pas confondre ce dernier avec la Nordschleife et ses 20km.</feedback>
                        
                        </div>

                    </div>


                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->

                    <div class="button_right_margin">
                        <button name="question6" value="validate" id="question6_button" data-status="not-over">Valider ma réponse</button> 
                    </div> 
    
                </div>


                <!-- QUESTION 7 -->


                <div class="quizz_form_question form7">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>Quelle est la division de voiture la plus rapide présente sur Forza Motorsport ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question7_answer1" name="question7" class="question7">
                                <label for="question7_answer1">GT2</label>
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question7_answer2" name="question7" class="question7">
                                <label for="question7_answer2">F1</label>     
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question7_answer3" name="question7" class="question7">
                                <label for="question7_answer3">Hypercar</label>    
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question7_answer4" name="question7" class="question7">
                                <label for="question7_answer4">LMP1</label>    
                            </div>
                        </div> 

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Les voitures les plus rapide sont les F1 bien que celles présentes dans le jeu datent des années 80 ! Ensuite ce sont les Hypercar suivie de près par les LMP1 et enfin les GT2. </feedback>
                        
                        </div>

                    </div>

                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->

                    <div class="button_right_margin">
                        <button name="question7" value="validate" id="question7_button" data-status="not-over">Valider ma réponse</button> 
                    </div>
    
                </div>

                
                <!-- QUESTION 8 -->


                <div class="quizz_form_question form8">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>Quelle voiture est en fond d&rsquo;écran sur l&rsquo;écran principale du jeu ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question8_answer1" name="question8" class="question8">
                                <label for="question8_answer1">Peugeot 908 - 2023</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question8_answer2" name="question8" class="question8">
                                <label for="question8_answer2">Porsche GT3RS - 2018</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question8_answer3" name="question8" class="question8">
                                <label for="question8_answer3">Cadillac V-LMDh - 2023</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question8_answer4" name="question8" class="question8">
                                <label for="question8_answer4">Ferrari 812 Superfast - 2018</label>            
                            </div>
                        </div> 

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Lors du premier démarrage c’est la Cadillac V-LMDH qui est en fond d’écran. Le jeu met en avant cette voiture car il s’agit de la seule Hypercar moderne présente. Il s’agit évidemment d’un partenariat avec la marque.</feedback>
                        
                        </div>

                    </div>

                    

                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->


                    <div class="button_right_margin">
                        <button name="question8" value="validate" id="question8_button" data-status="not-over">Valider ma réponse</button> 
                    </div>
    
                </div>


                <!-- QUESTION 9 -->

                
                <div class="quizz_form_question form9">

                    <div class="form_margin_to_separator">

                        <!-- SECTION QUESTION/REPONSES -->

                        <p>Quels sont les circuits qui sont situés aux USA (/!\ plusieurs réponses attendu)</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="checkbox" value="1" id="question9_answer1" name="question9" class="question9">
                                <label for="question9_answer1">Indianapolis Motor Speedway</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="checkbox" value="2" id="question9_answer2" name="question9" class="question9">
                                <label for="question9_answer2">Silverstone</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="checkbox" value="3" id="question9_answer3" name="question9" class="question9">
                                <label for="question9_answer3">Hakone Circuit</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="checkbox" value="4" id="question9_answer4" name="question9" class="question9">
                                <label for="question9_answer4">Laguna Seca</label>            
                            </div>

                        </div> 

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Les circuits américains sont indianapolis et Laguna Seca. Le premier se trouve dans l’Indiana et le deuxième en Californie. Hakone est au Japon tandis que Silverstone est un circuit Anglais.</feedback>
                        
                        </div>

                    </div>


                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->


                    <div class="button_right_margin">
                        <button name="question9" value="validate" id="question9_button" data-status="not-over">Valider ma réponse</button> 
                    </div>
    
                </div>


                <!-- QUESTION 10 -->

                
                <div class="quizz_form_question form10">

                    <div class="form_margin_to_separator">
                                            
                        <!-- SECTION QUESTION/REPONSES -->

                        <p>Combien y'a t-il de circuits dans le nouveau Forza Motorsport ?</p>
                        <div class="quizz_form_answer">
                            <div class="answer_proposition">
                                <input type="radio" value="1" id="question10_answer1" name="question10" class="question10">
                                <label for="question10_answer1">14</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="2" id="question10_answer2" name="question10" class="question10">
                                <label for="question10_answer2">20</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="3" id="question10_answer3" name="question10" class="question10">
                                <label for="question10_answer3">28</label>            
                            </div>
                            <div class="answer_proposition">
                                <input type="radio" value="4" id="question10_answer4" name="question10" class="question10">
                                <label for="question10_answer4">34</label>            
                            </div>

                        </div> 

                        <!-- FEEDBACK -->

                        <div class="quizz_form_feedback">

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST JUSTE -->

                            <lord-icon class="answer_feedback_true"
                                src="https://cdn.lordicon.com/lomfljuq.json"
                                trigger="in"
                                delay="200"
                                state="morph-check-in-1"
                                colors="primary:#109121">
                            </lord-icon>

                            <!-- ICONE INDIQUANT QUE LA REPONSE EST FAUSSE -->

                            <lord-icon class="answer_feedback_wrong"
                                src="https://cdn.lordicon.com/zxvuvcnc.json"
                                trigger="in"
                                delay="200"
                                colors="primary:#c71f16">
                            </lord-icon>

                            <!-- PARTIE FEEDBACK -->
                            <span class="answer_feedback"></span>
                            <feedback>Le jeu ne comporte que 20 circuits. Cependant ils possèdent pratiquement tous leurs version alternative, par exemple il est possible de jouer sur le circuit interne d’Indianapolis sur son anneau extérieur.</feedback>
                        
                        </div>

                    </div>


                    <!-- BOUTON POUR VALIDER REPONSES ET PASSER A LA QUESTION SUIVANTE -->


                    <div class="button_right_margin">
                        <button name="question10" value="validate" id="question10_button" data-status="not-over">Valider ma réponse</button> 
                    </div>
    
                    
                </div>
            </div>
        </div>  
        <div class="quizz_outro">

            <div class="quizz_outro_player_result">
                <h2>Questionnaire terminé !</h2>
                <p class="score_display">Ton score est <span class="result_display"></span></p>

                <div class="player_info_input">
                    <label>Quel est ton pseudo ?</label>
                    <input type="text" class="playername">
                    <p class="player_info_nb">Une fois ton pseudo renseigné tu peux cliquer sur le bouton 'suivant'</p>
                </div>

                <button class="next_button">Suivant</button>
            </div>

            <div class="quizz_outro_score_table">
                <h2>Voilà le tableau des scores :</h2>
                <div id="container"></div>

                <button class="restart">Redémarrer le quizz</button>
            </div>

        </div>  
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="script/minified_quizz.js"></script>
<script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>