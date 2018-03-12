
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*
 
@
p
a
c
k
a
g
e
 
J
o
m
r
e
s

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y
.

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
 
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
 
)
 
o
r
 
d
i
e
(
 
'
'
 
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#



c
l
a
s
s
 
j
0
6
0
0
0
b
a
c
k
g
r
o
u
n
d
_
p
r
o
c
e
s
s

 
 
 
 
{

	
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

	
	
{

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
 
'
m
c
H
a
n
d
l
e
r
'
 
)
;

	
	
i
f
 
(
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
 
)

	
	
	
{

	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;

	
	
	
r
e
t
u
r
n
;

	
	
	
}


	
	
	

	
	
	
$
p
a
y
l
o
a
d
_
s
o
u
r
c
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
a
y
l
o
a
d
_
s
o
u
r
c
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
"
R
e
c
e
i
v
e
d
 
d
e
f
e
r
r
e
d
 
m
e
s
s
a
g
e
 
n
o
t
i
f
i
c
a
t
i
o
n
 
"
 
,
 
'
m
e
s
s
a
g
e
_
h
a
n
d
l
i
n
g
'
,
 
'
D
E
B
U
G
'
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
i
f
 
(
$
p
a
y
l
o
a
d
_
s
o
u
r
c
e
 
!
=
 
'
'
 
)
 
{

	
	
	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
'
)
;

	
	
	
	
$
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
 
=
 
n
e
w
 
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
(
)
;

	
	
	
	
$
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
-
>
h
a
n
d
l
e
_
m
e
s
s
a
g
e
(
 
$
p
a
y
l
o
a
d
_
s
o
u
r
c
e
 
)
;

	
	
	
}

	
	
}




	
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

	
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

	
	
{

	
	
r
e
t
u
r
n
 
n
u
l
l
;

	
	
}

	
}
