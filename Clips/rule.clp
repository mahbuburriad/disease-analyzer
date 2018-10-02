(defrule database
=>
(printout t "Thanks for using our app, we are still upgrading our app" crlf)
(printout t "please choose first feel about your disease from the database the providing below" crlf)
(printout t "1. headache, temperature, vomiting
2. weakness, allergy, eyesbleeding
3. fascesbleeding, urinebleeding, nosebleeding, rashes
4. suddenfever, musclepain, sweating
5. jointswelling, abdominalpain, stomachpain, poorappetites" crlf)
)


(defrule felling
=>
(printout t "What do you feel? (Please Choose From Database) " crlf)
(assert (feeling (read))))

(defrule feeling-headache-temp
?feeling <-
(feeling ?feeling-read&headache|temperature|vomiting)
=>
(retract ?feeling)
(printout t "Do you feel any temperature? : yes or no : " crlf)
(assert (temp (read)))
(printout t "Do you feel any headache? : yes or no : " crlf)
(assert (headache (read)))

(printout t "Do you feel any vomiting? : yes or no : " crlf)
(assert (vomiting (read)))

(printout t "Do you feel any Body Pain? : yes or no : " crlf)
(assert (bodypain (read)))

(printout t "Do you feel Shivering? : yes or no : " crlf)
(assert (shivering (read)))

(printout t "Do you feel any Chills? : yes or no : " crlf)
(assert (chills (read)))

(printout t "Do you feel weakness? : yes or no : " crlf)
(assert (weakness (read)))

(printout t "Do you feel allergic reaction? : yes or no : " crlf)
(assert (allergic (read)))

(printout t "Do your Eyes are bleeding? : yes or no : " crlf)
(assert (eyesbleeding (read)))

(printout t "Do you feel Rashes? : yes or no : " crlf)
(assert (rashes (read)))

(printout t "Do you feel Non-stop bleeding in injured place? : yes or no : " crlf)
(assert (non-stop-bleeding (read)))

(printout t "Do your Nose bleeding? : yes or no : " crlf)
(assert (nosebleed (read)))
(printout t "Do you Fasces bleeding? : yes or no : " crlf)
(assert (fascesbleeding (read)))

(printout t "Do your urin have blood? : yes or no : " crlf)
(assert (urinebleeding (read)))

(printout t "Do you feel Suddently fever? : yes or no : " crlf)
(assert (suddenfever (read)))

(printout t "Do you have diarrhea? : yes or no : " crlf)
(assert (diarrhea (read)))
(printout t "Do you have Muscle Pain? : yes or no : " crlf)
(assert (musclepain (read)))

(printout t "Do you more sweating? : yes or no : " crlf)
(assert (sweating (read)))

(printout t "Do you feel abdominal pain? : yes or no : " crlf)
(assert (abdominalpain (read)))

(printout t "Do you feel poor appetities? : yes or no : " crlf)
(assert (poorappetities (read)))

(printout t "Do you feel join swelling? : yes or no : " crlf)
(assert (sweating (read)))

)

(defrule feeling-allergic
?feeling <-
(feeling ?feeling-read&allergy|eyesbleeding|fascesbleeding|urinebleeding|nosebleeding|rashes)
=>
(retract ?feeling)
(printout t "Do you have headache? : yes or no : " crlf)
(assert (headache (read)))
(printout t "Do your Temperature incleasing slowly? : yes or no : " crlf)
(assert (temp (read)))
(printout t "Do your Body Pain? : yes or no : " crlf)
(assert (bodypain (read)))
(printout t "Do you have Allergic Reaction? : yes or no : " crlf)
(assert (allergic (read)))
(printout t "Do you have Eyes Bleeding? : yes or no : " crlf)
(assert (eyesbleeding (read)))
(printout t "Do you have Rashes? : yes or no : " crlf)
(assert (rashes (read)))
(printout t "Do you have Nonstop bleeding in injured place? : yes or no : " crlf)
(assert (non-stop-bleeding (read)))
(printout t "Do you have Nose bleeding? : yes or no : " crlf)
(assert (nosebleeding (read)))
(printout t "Do you have Fasces Bleeding? : yes or no : " crlf)
(assert (faschesbleeding (read)))
(printout t "Do you have Urine bleeding? : yes or no : " crlf)
(assert (urinebleeding (read)))
)

(defrule feeling-suddenfever
?feeling <-
(feeling ?feeling-read&suddenfever|musclepain|sweating)
=>
(retract ?feeling)
(printout t "Do you have headache? : yes or no : " crlf)
(assert (headache (read)))
(printout t "Do you have Diarrhea? : yes or no : " crlf)
(assert (diarrhea (read)))
(printout t "Do you have Sudden Fever? : yes or no : " crlf)
(assert (suddenfever (read)))

(printout t "Do you have Muscle Pain? : yes or no : " crlf)
(assert (musclepain (read)))
(printout t "Do you have Vomiting? : yes or no : " crlf)
(assert (vomiting (read)))
(printout t "Do you have Sweating? : yes or no : " crlf)
(assert (sweating (read)))
)

(defrule feeling-jointswelling
?feeling <-
(feeling ?feeling-read&jointswelling)
=>
(retract ?feeling)
(printout t "Do you have headache? : yes or no : " crlf)
(assert (headache (read)))
(printout t "Do you have High Temperature? : yes or no : " crlf)
(assert (temp (read)))
(printout t "Do you have Body Pain? : yes or no : " crlf)
(assert (bodypain (read)))
(printout t "Do you have Vomiting? : yes or no : " crlf)
(assert (vomiting (read)))
(printout t "Do you feel weakness? : yes or no : " crlf)
(assert (weakness (read)))
(printout t "Do you have Rashes? : yes or no : " crlf)
(assert (rashes (read)))
(printout t "Do you have Joint Sweelling? : yes or no : " crlf)
(assert (jointswelling (read)))
)

(defrule feeling-poorappetites
?feeling <-
(feeling ?feeling-read&poorappetites)
=>
(retract ?feeling)
(printout t "Do you have headache? : yes or no : " crlf)
(assert (headache (read)))
(printout t "Do your temperature increasing? : yes or no : " crlf)
(assert (temp (read)))
(printout t "Do you Diarrhea? : yes or no : " crlf)
(assert (diarrhea (read)))
(printout t "Do you feel weakness? : yes or no : " crlf)
(assert (weakness (read)))
(printout t "Do you have Poor Appetites? : yes or no : " crlf)
(assert (poorappetites (read)))
(printout t "Do you feel abdominal Pain? : yes or no : " crlf)
(assert (abdominalpain (read)))
)

(defrule feeling-ulcer
?feeling <-
(feeling ?feeling-read&abdominalpain|stomachpain)
=>
(retract ?feeling)
(printout t "Do you feel Vomiting? : yes or no : " crlf)
(assert (vomiting (read)))

(printout t "Do you feel weightloss? : yes or no : " crlf)
(assert (weightloss (read)))

(printout t "Do you feel Heart Burn? : yes or no : " crlf)
(assert (heartburn (read)))

(printout t "Do you feel Empty Stomach pain? : yes or no : " crlf)
(assert (stomachpain (read)))

)



(defrule viralfever
?feeling <-
(temp ?temp-read&yes)
(headache ?headache-read&yes)
(bodypain ?bodypain-read&yes)
(vomiting ?vomiting-read&yes)
=>
(retract ?feeling)
(printout t "You have Viral Fever " crlf))

(defrule Dengue
?feeling <-
(temp ?temp-read&yes)
(headache ?headache-read&yes)
(bodypain ?bodypain-read&yes)
(allergic ?allergic-read&yes)
(rashes ?rashes-read&yes)
(faschesbleeding ?faschesbleeding-read&yes)
(urinebleeding ?urinebleeding-read&yes)
=>
(retract ?feeling)
(printout t "You have Dengue " crlf))

(defrule malaria
?feeling <-
(vomiting ?vomiting-read&yes)
(musclepain ?musclepain-read&yes)
(diarrhea ?diarrhea-read&yes)
(sweating ?sweating-read&yes)

=>
(retract ?feeling)
(printout t "You have Malaria " crlf))


(defrule chikungunya
?feeling <-
(bodypain ?bodypain-read&yes)
(vomiting ?vomiting-read&yes)
(weakness ?weakness-read&yes)
(rashes ?rashes-read&yes)
(jointswelling ?jointswelling-read&yes)

=>
(retract ?feeling)
(printout t "You have chikunguniya " crlf))


(defrule typhoid
?feeling <-
(diarrhea ?diarrhea-read&yes)
(weakness ?weakness-read&yes)
(poorappetites ?rashes-read&yes)
(abdominalpain ?abdominalpain-read&yes)

=>
(retract ?feeling)
(printout t "You have Typhoid " crlf))


(defrule peptic
?feeling <-
(abdominalpain ?abdominalpain-read&yes)
(heartburn ?heartburn-read&yes)
(weightloss ?weightloss-read&yes)
=>
(retract ?feeling)
(printout t "You have Peptic Ulcer " crlf))

(defrule duodenal
?feeling <-
(stomachpain ?abdominalpain-read&yes)
(heartburn ?heartburn-read&yes)
=>
(retract ?feeling)
(printout t "You have Duodenal Ulcer " crlf))