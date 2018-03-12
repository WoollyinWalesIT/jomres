
<
?
p
h
p

/
*
*

 
*
 
S
u
p
p
o
r
t
s
 
f
u
l
l
-
s
c
r
e
e
n
 
v
i
e
w
 
i
n
 
a
n
y
 
W
o
r
d
p
r
e
s
s
 
t
h
e
m
e

 
*

 
*
 
W
h
e
n
 
f
u
l
l
-
s
c
r
e
e
n
 
v
i
e
w
 
o
f
 
J
o
m
r
e
s
 
i
s
 
c
h
o
s
e
n
,
 
i
f
 
t
h
i
s
 
f
i
l
e
 
d
o
e
s
 
n
o
t
 
a
l
r
e
a
d
y
 
e
x
i
s
t
 
i
n
 
t
h
e
 
t
h
e
m
e
 
d
i
r
e
c
t
o
r
y
 
t
h
e
n
 
t
h
i
s
 
s
c
r
i
p
t
 
i
s
 
c
o
p
i
e
d
 
t
o
 
t
h
a
t
 
t
h
e
m
e
'
s
 
d
i
r
e
c
t
o
r
y
 
a
u
t
o
m
a
t
i
c
a
l
l
y
.
 
O
n
c
e
 
t
h
a
t
'
s
 
d
o
n
e
 
t
h
e
n
 
i
t
 
i
s
 
p
o
s
s
i
b
l
e
 
t
o
 
r
u
n
 
J
o
m
r
e
s
 
i
n
 
f
u
l
l
-
s
c
r
e
e
n
 
v
i
e
w
 
r
e
g
a
r
d
l
e
s
s
 
o
f
 
t
h
e
 
t
h
e
m
e
'
s
 
o
w
n
 
s
e
t
t
i
n
g
s
.

 
*

 
*
 
@
a
u
t
h
o
r
 
A
l
a
d
a
r
 
B
a
r
t
h
i
 
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

 
*
/

 

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
;

?
>

<
!
D
O
C
T
Y
P
E
 
h
t
m
l
>

<
h
e
a
d
>

	
<
m
e
t
a
 
h
t
t
p
-
e
q
u
i
v
=
"
c
o
n
t
e
n
t
-
t
y
p
e
"
 
c
o
n
t
e
n
t
=
"
t
e
x
t
/
h
t
m
l
;
 
c
h
a
r
s
e
t
=
u
t
f
-
8
"
 
/
>

	
<
m
e
t
a
 
n
a
m
e
=
"
v
i
e
w
p
o
r
t
"
 
c
o
n
t
e
n
t
=
"
w
i
d
t
h
=
d
e
v
i
c
e
-
w
i
d
t
h
,
 
i
n
i
t
i
a
l
-
s
c
a
l
e
=
1
.
0
"
>

	
<
t
i
t
l
e
>
<
?
p
h
p
 
w
p
_
t
i
t
l
e
(
'
|
'
,
 
t
r
u
e
,
 
'
r
i
g
h
t
'
)
;
 
?
>
<
/
t
i
t
l
e
>

	

	
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
"
>

	
v
a
r
 
a
d
d
o
n
_
a
n
i
m
a
t
i
o
n
s
_
e
n
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

	
<
/
s
c
r
i
p
t
>

	

	
<
?
p
h
p

 
 
 
 
/
/
f
i
n
d
 
t
h
e
 
j
o
m
r
e
s
 
t
e
m
p
l
a
t
e
 
s
e
t
 
t
o
 
b
e
 
u
s
e
d

 
 
 
 
i
f
 
(
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
j
q
u
e
r
y
_
u
i
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
i
f
 
(
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
 
=
=
 
'
2
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
b
o
o
t
s
t
r
a
p
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
!
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
b
o
o
t
s
t
r
a
p
3
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
b
o
o
t
s
t
r
a
p
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
c
r
i
p
t
(
'
j
q
u
e
r
y
'
)
;


 
 
 
 
w
p
_
r
e
g
i
s
t
e
r
_
s
c
r
i
p
t
(
'
j
q
u
e
r
y
-
u
i
-
d
i
s
t
'
,
 
'
/
'
.
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
j
q
u
e
r
y
-
u
i
-
d
i
s
t
/
j
q
u
e
r
y
-
u
i
.
m
i
n
.
j
s
'
,
 
'
j
q
u
e
r
y
'
)
;

 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
c
r
i
p
t
(
'
j
q
u
e
r
y
-
u
i
-
d
i
s
t
'
)
;


 
 
 
 
/
*
i
f
 
(
$
v
i
e
w
 
=
=
 
"
b
o
o
t
s
t
r
a
p
"
)

 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
w
p
_
r
e
g
i
s
t
e
r
_
s
c
r
i
p
t
(
'
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
'
,
 
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
/
j
s
/
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
'
,
 
'
j
q
u
e
r
y
'
 
)
;

 
 
 
 
 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
c
r
i
p
t
(
'
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
e
l
s
e
i
f
 
(
$
v
i
e
w
 
=
=
 
"
b
o
o
t
s
t
r
a
p
3
"
)

 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
w
p
_
r
e
g
i
s
t
e
r
_
s
c
r
i
p
t
(
'
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
'
,
 
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
3
/
j
s
/
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
'
,
 
'
j
q
u
e
r
y
'
 
)
;

 
 
 
 
 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
c
r
i
p
t
(
'
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
}
*
/


 
 
 
 
w
p
_
h
e
a
d
(
)
;

 
 
 
 
?
>

	
<
?
p
h
p
 
i
f
 
(
$
v
i
e
w
 
=
=
 
'
b
o
o
t
s
t
r
a
p
'
)
 
:

 
 
 
 
 
 
 
 
w
p
_
r
e
g
i
s
t
e
r
_
s
t
y
l
e
(
'
f
u
l
l
s
c
r
e
e
n
.
c
s
s
'
,
 
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
/
c
s
s
/
f
u
l
l
s
c
r
e
e
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
t
y
l
e
(
'
f
u
l
l
s
c
r
e
e
n
.
c
s
s
'
)
;

 
 
 
 
e
l
s
e
i
f
 
(
$
v
i
e
w
 
=
=
 
'
b
o
o
t
s
t
r
a
p
3
'
)
 
:

 
 
 
 
 
 
 
 
w
p
_
r
e
g
i
s
t
e
r
_
s
t
y
l
e
(
'
j
q
u
e
r
y
-
u
i
-
d
i
s
t
'
,
 
'
/
'
.
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
j
q
u
e
r
y
-
u
i
-
t
h
e
m
e
s
/
t
h
e
m
e
s
/
b
a
s
e
/
j
q
u
e
r
y
-
u
i
.
m
i
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
t
y
l
e
(
'
j
q
u
e
r
y
-
u
i
-
d
i
s
t
'
)
;

 
 
 
 
 
 
 
 
w
p
_
r
e
g
i
s
t
e
r
_
s
t
y
l
e
(
'
f
u
l
l
s
c
r
e
e
n
.
c
s
s
'
,
 
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
3
/
c
s
s
/
f
u
l
l
s
c
r
e
e
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
t
y
l
e
(
'
f
u
l
l
s
c
r
e
e
n
.
c
s
s
'
)
;

 
 
 
 
e
l
s
e
i
f
 
(
$
v
i
e
w
 
=
=
 
'
j
q
u
e
r
y
_
u
i
'
)
 
:

 
 
 
 
 
 
 
 
w
p
_
r
e
g
i
s
t
e
r
_
s
t
y
l
e
(
'
j
q
u
e
r
y
-
u
i
-
d
i
s
t
'
,
 
'
/
'
.
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
j
q
u
e
r
y
-
u
i
-
t
h
e
m
e
s
/
t
h
e
m
e
s
/
b
a
s
e
/
j
q
u
e
r
y
-
u
i
.
m
i
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
w
p
_
e
n
q
u
e
u
e
_
s
t
y
l
e
(
'
j
q
u
e
r
y
-
u
i
-
d
i
s
t
'
)
;

 
 
 
 
e
n
d
i
f
;
 
?
>

	
<
s
t
y
l
e
 
t
y
p
e
=
"
t
e
x
t
/
c
s
s
"
 
m
e
d
i
a
=
"
s
c
r
e
e
n
"
>

	
.
m
o
d
a
l
-
b
a
c
k
d
r
o
p
 
{
z
-
i
n
d
e
x
:
1
0
3
0
 
!
i
m
p
o
r
t
a
n
t
;
}

	
.
a
p
p
e
a
r
 
{
o
p
a
c
i
t
y
:
1
 
!
i
m
p
o
r
t
a
n
t
;
}

	
<
/
s
t
y
l
e
>

<
/
h
e
a
d
>

<
b
o
d
y
 
c
l
a
s
s
=
"
c
o
n
t
e
n
t
p
a
n
e
"
>

	
<
?
p
h
p
 
t
h
e
_
c
o
n
t
e
n
t
(
)
;
 
?
>

	
<
?
p
h
p
 
w
p
_
f
o
o
t
e
r
(
)
;
 
/
/
 
j
s
 
s
c
r
i
p
t
s
 
a
r
e
 
i
n
s
e
r
t
e
d
 
u
s
i
n
g
 
t
h
i
s
 
f
u
n
c
t
i
o
n
?
>

<
/
b
o
d
y
>

<
/
h
t
m
l
>
