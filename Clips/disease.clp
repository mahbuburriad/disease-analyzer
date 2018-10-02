(deffunction ask-question (?question $?allowed-values)
   (printout t ?question)
   (bind ?answer (read))
   (if (lexemep ?answer)
       then (bind ?answer (lowcase ?answer)))
   (while (not (member ?answer ?allowed-values)) do
      (printout t ?question)
      (bind ?answer (read))
      (if (lexemep ?answer)
          then (bind ?answer (lowcase ?answer))))
   ?answer)

(deffunction yes-or-no-p (?question)
   (bind ?response (ask-question ?question yes no y n))
   (if (or (eq ?response yes) (eq ?response y))
       then yes
       else no))

;;;***************
;;;* QUERY RULES *
;;;***************

(defrule determine-headache-state ""
   (not (headache-starts ?))
   (not (disease ?))
   =>
   (assert (headache-starts (yes-or-no-p "Do you feel headache (yes/no)? "))))

(defrule determine-temperature-state ""
   (headache-starts yes)
   (not (disease ?))
   =>
   (assert (temperature (yes-or-no-p "Your body temperature is 98.4 to 104 (yes/no)? "))))

(defrule determine-abdominal-pain ""
   (headache-starts no)
   (not (disease ?))
   =>
   (assert (abdominal (yes-or-no-p "Do you feel abdominal pain (yes/no)? "))))

(defrule determine-heart-burn ""
(headache-starts yes)
   (temperature no)
   (not (disease ?))
   =>
   (assert (heartburn (yes-or-no-p "Do you feel hurt burn (yes/no)? "))))

(defrule determine-body-pain ""
(headache-starts yes)
   (temperature yes)
   (not (disease ?))
   =>
   (assert (bodypain (yes-or-no-p "Do you feel body pain (yes/no)? "))))

(defrule determine-heart-burn ""
(headache-starts no)
   (abdominal yes)
   (not (disease ?))
   =>
   (assert (heartburn (yes-or-no-p "Do you feel hurt burn (yes/no)?"))))

(defrule determine-body-pain ""
(headache-starts no)
(abdominal no)
   (not (disease ?))
   =>
   (assert (bodypain (yes-or-no-p "Do you feel body pain (yes/no)? "))))

   (defrule determine-vomiting-state ""
   (abdominal yes)
(heartburn yes)
   (not (disease ?))
   =>
   (assert (vomiting (yes-or-no-p "Do you feel vomiting (yes/no)? "))))

   (defrule determine-shivering-state ""
   (bodypain yes)
(heartburn no)
   (not (disease ?))
   =>
   (assert (shivering (yes-or-no-p "Do you feel Shivering (yes/no)? "))))

   (defrule determine-vomiting-state ""
   (temperature yes)
(bodypain no)
   (not (disease ?))
   =>
   (assert (vomiting (yes-or-no-p "Do you feel vomiting (yes/no)? "))))

(defrule determine-shivering-state ""
(temperature yes)
(bodypain yes)
   (not (disease ?))
   =>
   (assert (shivering (yes-or-no-p "Do you feel Shivering (yes/no)? "))))

   (defrule determine-weight-loss ""
   (bodypain yes)
(vomiting yes)
   (not (disease ?))
   =>
   (assert (weightloss (yes-or-no-p "Your weight loss is increasing (yes/no)? "))))

   (defrule determine-chills-state ""
   (bodypain yes)
(vomiting no)
   (not (disease ?))
   =>
   (assert (chills (yes-or-no-p "Do you feel chills (yes/no)? "))))


   (defrule determine-weight-loss ""
   (vomiting yes)
(shivering no)
   (not (disease ?))
   =>
   (assert (weightloss (yes-or-no-p "Your weight loss is increasing (yes/no)? "))))

   (defrule determine-chills-state ""
   (vomiting yes)
(shivering yes)
   (not (disease ?))
   =>
   (assert (chills (yes-or-no-p "Do you feel chills (yes/no)? "))))

   (defrule determine-weakness-state ""
   (shivering yes)
(chills yes)
   (not (disease ?))
   =>
   (assert (chills (yes-or-no-p "Do you feel your weakness is increasing (yes/no)? "))))



;;;****************
;;;* Disease RULES *
;;;****************

(defrule normal-viral-fever-conclusions ""
   (headache yes)
   (temperature yes)
   (bodypain yes)
   (shivering yes)
   (chills yes)
   (weakness yes)
   (abdominal no)
   (heartburn no)
   (vomiting no)
   (weightloss no)
   (not (disease ?))
   =>
   (assert (disease "You have Viral Fever")))


   (defrule normal-peptic-ulcer-conclusions ""
   (headache no)
   (temperature no)
   (bodypain no)
   (shivering no)
   (chills no)
   (weakness no)
   (abdominal yes)
   (heartburn yes)
   (vomiting yes)
   (weightloss yes)
   (not (disease ?))
   =>
   (assert (disease "You have peptic Ulcer")))

(defrule no-disease ""
  (declare (salience -10))
  (not (disease ?))
  =>
  (assert (disease "Please Go To hospital, we can not.")))



;;;********************************
;;;* STARTUP AND CONCLUSION RULES *
;;;********************************

(defrule system-banner ""
  (declare (salience 10))
  =>
  (printout t crlf crlf)
  (printout t "System Failed to Recognize disease")
  (printout t crlf crlf))

(defrule print-repair ""
  (declare (salience 10))
  (repair ?item)
  =>
  (printout t crlf crlf)
  (printout t "Suggested Doctor:")
  (printout t crlf crlf)
  (format t " %s%n%n%n" ?item))

