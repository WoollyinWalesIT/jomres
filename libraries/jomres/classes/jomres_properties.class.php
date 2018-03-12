
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


/
/
u
s
e
d
 
f
o
r
 
g
e
t
t
i
n
g
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
s
y
s
t
e
m
,
 
d
e
l
e
t
i
n
g
,
 
s
a
v
i
n
g
 
e
x
i
s
t
i
n
g
 
a
n
d
 
i
n
s
e
r
t
i
n
g
 
n
e
w
 
o
n
e
s

/
/
t
o
 
g
e
t
 
t
h
e
 
d
e
t
a
i
l
s
 
o
f
 
a
n
 
e
x
i
s
t
i
n
g
 
p
r
o
p
e
r
t
y
 
u
s
e
 
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
 
c
l
a
s
s

c
l
a
s
s
 
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
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
t
h
i
s
-
>
a
l
l
_
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
p
r
o
p
e
r
t
y
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
_
p
r
o
p
e
r
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
t
o
w
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
t
e
l
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
f
a
x
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
e
m
a
i
l
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
m
a
p
p
i
n
g
l
i
n
k
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
d
e
s
c
r
i
p
t
i
o
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
i
c
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
u
b
l
i
s
h
e
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
r
s
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
p
e
r
i
o
r
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
i
k
e
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
n
g
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
e
t
a
t
i
t
l
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
e
t
a
k
e
y
w
o
r
d
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
s
i
t
e
_
i
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
e
r
m
i
t
_
n
u
m
b
e
r
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
c
a
t
_
i
d
 
=
 
0
;

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
t
h
e
 
s
y
s
t
e
m

 
 
 
 
p
u
b
l
i
c
 
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
_
a
l
l
_
p
r
o
p
e
r
t
i
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
a
l
l
_
p
r
o
p
e
r
t
y
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
h
e
a
v
y
w
e
i
g
h
t
_
s
y
s
t
e
m
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
,
 
`
p
u
b
l
i
s
h
e
d
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
O
R
D
E
R
 
B
Y
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
A
S
C
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
 
=
 
c
o
u
n
t
(
$
r
e
s
u
l
t
)
;

	
	

	
	
i
f
 
(
$
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
 
=
=
 
0
)
 
{

	
	
	
e
c
h
o
 
'
E
r
r
o
r
,
 
n
o
 
p
r
o
p
e
r
t
i
e
s
 
i
n
s
t
a
l
l
e
d
.
 
B
e
f
o
r
e
 
y
o
u
 
c
a
n
 
u
s
e
 
J
o
m
r
e
s
 
y
o
u
 
n
e
e
d
 
t
o
 
h
a
v
e
 
a
t
 
l
e
a
s
t
 
1
 
p
r
o
p
e
r
t
y
 
i
n
s
t
a
l
l
e
d
.
<
/
a
>
.
'
;

	
	
	
d
i
e
(
)
;

	
	
}


 
 
 
 
 
 
 
 
i
f
 
(
$
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
 
>
 
2
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
h
e
a
v
y
w
e
i
g
h
t
_
s
y
s
t
e
m
'
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
'
,
 
$
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
)
;


 
 
 
 
 
 
 
 
$
a
l
l
_
p
r
o
p
e
r
t
y
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
y
s
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
p
r
o
p
e
r
t
y
s
[
]
 
=
 
$
r
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
-
>
p
u
b
l
i
s
h
e
d
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
y
s
[
 
]
 
=
 
$
r
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
a
l
l
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
,
 
$
a
l
l
_
p
r
o
p
e
r
t
y
s
)
;

 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
,
 
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
y
s
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
a
r
r
a
y
(
'
a
l
l
_
p
r
o
p
e
r
t
y
s
'
 
=
>
 
$
a
l
l
_
p
r
o
p
e
r
t
y
s
,
 
'
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
y
s
'
 
=
>
 
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
y
s
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
_
n
e
w
_
p
r
o
p
e
r
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
a
l
r
e
a
d
y
 
s
e
t
.
 
A
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
`
r
e
 
i
n
s
e
r
t
i
n
g
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
?
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
j
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
g
e
t
_
p
r
o
p
e
r
t
y
_
t
y
p
e
(
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
)
;


 
 
 
 
 
 
 
 
/
/
s
e
t
 
r
e
a
l
 
e
s
t
a
t
e
 
f
l
a
g

 
 
 
 
 
 
 
 
/
/
 
m
r
p
_
s
r
p
_
f
l
a
g
:

 
 
 
 
 
 
 
 
/
/
 
0
 
-
 
h
o
t
e
l

 
 
 
 
 
 
 
 
/
/
 
1
 
-
 
v
i
l
l
a
/
a
p
a
r
t
m
e
n
t

 
 
 
 
 
 
 
 
/
/
 
2
 
-
 
b
o
t
h
 
-
 
B
C
,
 
r
e
s
e
t
s
 
t
o
 
0

 
 
 
 
 
 
 
 
/
/
 
3
 
-
 
t
o
u
r
s

 
 
 
 
 
 
 
 
/
/
 
4
 
-
 
r
e
a
l
 
e
s
t
a
t
e

 
 
 
 
 
 
 
 
$
r
e
a
l
e
s
t
a
t
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
 
=
=
 
4
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
a
l
e
s
t
a
t
e
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
e
t
 
n
e
w
 
p
r
o
p
e
r
t
y
 
a
p
i
 
k
e
y

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
i
k
e
y
 
=
 
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
(
)
;


 
 
 
 
 
 
 
 
/
/
s
e
t
 
m
r
p
 
s
r
p
 
f
l
a
g

 
 
 
 
 
 
 
 
$
m
r
p
_
s
r
p
_
f
l
a
g
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
;

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
p
_
s
r
p
_
f
l
a
g
 
=
=
 
'
2
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
p
_
s
r
p
_
f
l
a
g
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}
 
/
/
 
W
e
'
r
e
 
g
o
i
n
g
 
t
o
 
a
s
s
u
m
e
 
t
h
a
t
 
a
l
l
 
n
e
w
l
y
 
c
r
e
a
t
e
d
 
p
r
o
p
e
r
t
i
e
s
 
a
r
e
 
M
R
P
s


 
 
 
 
 
 
 
 
/
/
s
e
t
 
a
p
p
r
o
v
e
d
 
f
l
a
g

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
j
r
C
o
n
f
i
g
[
'
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
_
a
p
p
r
o
v
e
_
n
e
w
_
p
r
o
p
e
r
t
i
e
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
'
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
_
a
p
p
r
o
v
e
_
n
e
w
_
p
r
o
p
e
r
t
i
e
s
'
]
 
=
 
1
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
'
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
_
a
p
p
r
o
v
e
_
n
e
w
_
p
r
o
p
e
r
t
i
e
s
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
 
=
 
1
;

 
 
 
 
 
 
 
 
}


	
	
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
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
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
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
r
o
o
m
_
t
y
p
e
s
-
>
g
e
t
_
x
r
e
f
s
(
)
;

	
	

	
	
$
d
e
f
a
u
l
t
_
r
o
o
m
_
t
y
p
e
 
=
 
0
;

	
	
i
f
 
(
i
s
s
e
t
(
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
[
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
]
[
0
]
)
)
 
{

	
	
	
$
d
e
f
a
u
l
t
_
r
o
o
m
_
t
y
p
e
 
=
 
(
i
n
t
)
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
[
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
]
[
0
]
;

	
	
}


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
n
e
w
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
n
a
m
e
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
e
m
a
i
l
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
k
e
y
`
,

	
	
	
	
	
	
	
`
p
t
y
p
e
_
i
d
`
,

	
	
	
	
	
	
	
`
a
p
i
k
e
y
`
,
 

	
	
	
	
	
	
	
`
a
p
p
r
o
v
e
d
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
s
i
t
e
_
i
d
`
,

	
	
	
	
	
	
	
`
c
a
t
_
i
d
`
 

	
	
	
	
	
	
	
)

	
	
	
	
	
	
V
A
L
U
E
S

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
.
"
'
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
e
m
a
i
l
.
"
'
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
.
"
'
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
.
"
'
,
 

	
	
	
	
	
	
	
'
"
.
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
p
r
i
c
e
.
"
'
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
.
"
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
a
p
i
k
e
y
.
"
'
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
.
"
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
s
i
t
e
_
i
d
.
"
'
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
c
a
t
_
i
d
.
"

	
	
	
	
	
	
	
)
"
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
P
R
O
P
E
R
T
Y
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
|
|
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
N
e
w
 
p
r
o
p
e
r
t
y
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
t
h
e
 
p
r
o
p
e
r
t
y
 
n
a
m
e
 
i
n
 
t
h
e
 
c
u
s
t
o
m
 
t
e
x
t
 
t
a
b
l
e

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
s
e
t
t
i
n
g
s

 
 
 
 
 
 
 
 
i
f
 
(
!
$
r
e
a
l
e
s
t
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
p
_
s
r
p
_
f
l
a
g
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
'
1
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
c
r
e
a
t
e
 
a
 
d
e
f
a
u
l
t
 
s
i
n
g
l
e
 
r
o
o
m
 
p
r
o
p
e
r
t
y
 
r
o
o
m
 
t
h
a
t
 
c
a
n
 
b
e
 
e
d
i
t
e
d
 
l
a
t
e
r

	
	
	
	
i
f
 
(
$
d
e
f
a
u
l
t
_
r
o
o
m
_
t
y
p
e
 
>
 
0
)
 
{

	
	
	
	
	
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
s
 

	
	
	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
,

	
	
	
	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
,

	
	
	
	
	
	
	
	
	
	
`
m
a
x
_
p
e
o
p
l
e
`

	
	
	
	
	
	
	
	
	
	
)

	
	
	
	
	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
	
	
'
.
$
d
e
f
a
u
l
t
_
r
o
o
m
_
t
y
p
e
.
'
,

	
	
	
	
	
	
	
	
	
	
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
'
,

	
	
	
	
	
	
	
	
	
	
1
0

	
	
	
	
	
	
	
	
	
	
)
'
;


	
	
	
	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
)
)
 
{

	
	
	
	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
N
e
w
 
s
r
p
 
d
e
f
a
u
l
t
 
r
o
o
m
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

	
	
	
	
	
}

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
	
	
	
`
a
k
e
y
`
,

	
	
	
	
	
	
	
	
`
v
a
l
u
e
`

	
	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
"
,

	
	
	
	
	
	
	
	
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
,

	
	
	
	
	
	
	
	
'
"
.
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
.
"
'

	
	
	
	
	
	
	
	
)
"
;



 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
E
D
I
T
_
P
R
O
P
E
R
T
Y
_
S
E
T
T
I
N
G
S
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
E
D
I
T
_
P
R
O
P
E
R
T
Y
_
S
E
T
T
I
N
G
S
'
,
 
f
a
l
s
e
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
s
e
t
t
i
n
g
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
	
	
	
`
a
k
e
y
`
,

	
	
	
	
	
	
	
	
`
v
a
l
u
e
`

	
	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
"
,

	
	
	
	
	
	
	
	
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
,

	
	
	
	
	
	
	
	
'
1
'

	
	
	
	
	
	
	
	
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
E
D
I
T
_
P
R
O
P
E
R
T
Y
_
S
E
T
T
I
N
G
S
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
E
D
I
T
_
P
R
O
P
E
R
T
Y
_
S
E
T
T
I
N
G
S
'
,
 
f
a
l
s
e
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
s
e
t
t
i
n
g
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
c
r
e
a
t
e
d
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
 
i
s
 
c
r
e
a
t
e
d
.
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
n
e
w
 
m
a
n
a
g
e
r

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
u
s
e
r
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
j
o
m
r
e
s
_
u
s
e
r
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
u
s
e
r
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
(
i
n
t
)
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
;

	
	
	
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
a
c
c
e
s
s
_
l
e
v
e
l
 
=
 
7
0
;

	
	
	
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
=
 
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

	
	
	
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
a
p
i
k
e
y
 
=
 
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
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
u
s
e
r
s
-
>
c
o
m
m
i
t
_
n
e
w
_
u
s
e
r
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
a
u
t
h
o
r
i
s
e
d
 
p
r
o
p
e
r
t
i
e
s
 
f
o
r
 
t
h
i
s
 
(
n
e
w
)
 
m
a
n
a
g
e
r

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
[
]
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
M
a
n
a
g
e
r
I
d
T
o
P
r
o
p
e
r
t
y
X
r
e
f
T
a
b
l
e
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
,
 
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
_
u
p
d
a
t
e
_
p
r
o
p
e
r
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
 
A
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
`
r
e
 
e
d
i
t
i
n
g
 
a
n
 
e
x
i
s
t
i
n
g
 
p
r
o
p
e
r
t
y
?
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	

	
	
$
t
h
i
s
J
R
U
s
e
r
 
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
j
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
t
h
e
 
n
e
w
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
a
l
l
o
w
s
 
b
o
o
k
i
n
g
 
r
o
o
m
s
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
,
 
t
h
e
 
p
r
o
p
e
r
t
y
 
i
t
s
e
l
f
 
o
r
 
n
e
i
t
h
e
r
 
(
t
o
u
r
/
r
e
a
l
 
e
s
t
a
t
e
)
,
 
s
o
 
w
e
 
c
a
n
 
d
e
l
e
t
e
 
a
l
l
 
r
o
o
m
s
 
a
n
d
 
t
a
r
i
f
f
s

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
 
!
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
t
y
p
e
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
w
e
`
l
l
 
u
s
e
 
f
u
n
c
t
i
o
n
 
p
a
r
a
m
s
 
h
e
r
e
 
b
e
c
a
u
s
e
 
t
h
i
s
 
w
a
y
 
w
e
 
c
a
n
 
r
e
u
s
e
 
b
o
t
h
 
f
u
n
c
t
i
o
n
s
 
f
r
o
m
 
o
t
h
e
r
 
c
o
d
e
 
t
o
o
 
i
f
 
n
e
e
d
e
d

 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
_
m
r
p
_
s
r
p
_
f
l
a
g
s
_
m
a
t
c
h
(
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
,
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
t
y
p
e
_
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
r
o
o
m
s
,
 
t
a
r
i
f
f
s
 
a
n
d
 
p
r
o
p
e
r
t
y
 
s
e
t
t
i
n
g
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
l
e
t
e
_
r
o
o
m
s
_
t
a
r
i
f
f
s
_
s
e
t
t
i
n
g
s
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
p
r
o
p
e
r
t
y
 
s
e
t
t
i
n
g
s
 
t
a
b
l
e
,
 
t
h
e
 
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
a
n
d
 
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
s
e
t
t
i
n
g
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
p
d
a
t
e
_
p
r
o
p
e
r
t
y
_
s
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
h
a
s
 
a
n
 
a
p
i
 
k
e
y

 
 
 
 
 
 
 
 
$
a
p
i
c
l
a
u
s
e
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
a
p
i
k
e
y
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 
$
a
p
i
k
e
y
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;


 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
(
$
a
p
i
k
e
y
)
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
i
k
e
y
 
=
 
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
i
c
l
a
u
s
e
 
=
 
"
 
`
a
p
i
k
e
y
`
 
=
 
'
"
.
$
t
h
i
s
-
>
a
p
i
k
e
y
.
"
'
,
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
=
 
'
,
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
)
.
'
,
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
S
E
T

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
n
a
m
e
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
t
o
w
n
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
t
o
w
n
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
t
e
l
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
t
e
l
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
f
a
x
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
f
a
x
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
e
m
a
i
l
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
e
m
a
i
l
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
`
 
=
 
'
"
.
$
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
k
e
y
`
 
=
 
'
"
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
p
r
i
c
e
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
m
a
p
p
i
n
g
l
i
n
k
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
m
a
p
p
i
n
g
l
i
n
k
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
d
e
s
c
r
i
p
t
i
o
n
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
d
e
s
c
r
i
p
t
i
o
n
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
.
"
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
.
"
'
,

	
	
	
	
	
	
`
l
a
t
`
 
=
 
'
"
.
$
t
h
i
s
-
>
l
a
t
.
"
'
,

	
	
	
	
	
	
`
l
o
n
g
`
 
=
 
'
"
.
$
t
h
i
s
-
>
l
o
n
g
.
"
'
,

	
	
	
	
	
	
`
m
e
t
a
t
i
t
l
e
`
 
=
 
'
"
.
$
t
h
i
s
-
>
m
e
t
a
t
i
t
l
e
.
"
'
,

	
	
	
	
	
	
`
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
`
 
=
 
'
"
.
$
t
h
i
s
-
>
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
.
"
'
,

	
	
	
	
	
	
`
m
e
t
a
k
e
y
w
o
r
d
s
`
 
=
 
'
"
.
$
t
h
i
s
-
>
m
e
t
a
k
e
y
w
o
r
d
s
.
"
'
,

	
	
	
	
	
	
`
s
t
a
r
s
`
 
=
 
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
t
a
r
s
.
"
,

	
	
	
	
	
	
`
s
u
p
e
r
i
o
r
`
 
=
 
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
u
p
e
r
i
o
r
.
"
,

	
	
	
	
	
	
"
.
$
a
p
i
c
l
a
u
s
e
.
"

	
	
	
	
	
	
`
p
t
y
p
e
_
i
d
`
 
=
 
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
.
"
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
s
i
t
e
_
i
d
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
s
i
t
e
_
i
d
.
"
'
,

	
	
	
	
	
	
`
p
e
r
m
i
t
_
n
u
m
b
e
r
`
 
=
 
'
"
.
$
t
h
i
s
-
>
p
e
r
m
i
t
_
n
u
m
b
e
r
.
"
'
,

	
	
	
	
	
	
`
c
a
t
_
i
d
`
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
-
>
c
a
t
_
i
d
.
"

	
	
	
	
	
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
"
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;


 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
P
R
O
P
E
R
T
Y
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
p
d
a
t
e
 
i
n
t
e
r
t
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
c
u
s
t
o
m
 
t
e
x
t

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
S
T
R
E
E
T
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
t
o
w
n
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
d
e
s
c
r
i
p
t
i
o
n
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
C
H
E
C
K
I
N
T
I
M
E
S
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
A
R
E
A
A
C
T
I
V
I
T
I
E
S
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
I
R
E
C
T
I
O
N
S
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
A
I
R
P
O
R
T
S
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
O
T
H
E
R
T
R
A
N
S
P
O
R
T
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
I
S
C
L
A
I
M
E
R
S
'
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
T
I
T
L
E
'
,
 
$
t
h
i
s
-
>
m
e
t
a
t
i
t
l
e
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
D
E
S
C
R
I
P
T
I
O
N
'
,
 
$
t
h
i
s
-
>
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
K
E
Y
W
O
R
D
S
'
,
 
$
t
h
i
s
-
>
m
e
t
a
k
e
y
w
o
r
d
s
,
 
t
r
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
)
;


	
	
/
/
c
h
a
n
g
e
 
t
h
e
 
a
p
p
r
o
v
a
l
 
a
n
d
 
p
u
b
l
i
s
h
e
d
 
s
t
a
t
u
s
 
i
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
i
s
 
e
d
i
t
e
d
 
b
y
 
a
 
m
a
n
a
g
e
r
 
(
n
o
t
 
s
u
p
e
r
 
m
a
n
a
g
e
r
)
 
a
n
d
 
p
r
o
p
e
r
t
i
e
s
 
r
e
q
u
i
r
e
 
a
p
p
r
o
v
a
l

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
'
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
_
a
p
p
r
o
v
e
_
n
e
w
_
p
r
o
p
e
r
t
i
e
s
'
]
 
=
=
 
0
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
 
=
=
 
1
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
A
p
p
r
o
v
e
d
(
0
)
;

	
	
	
}

	
	
	

	
	
	
i
f
 
(
$
t
h
i
s
-
>
p
u
b
l
i
s
h
e
d
 
=
=
 
1
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
P
u
b
l
i
s
h
e
d
(
0
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
	
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
u
p
d
a
t
e
d
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
	
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
u
p
d
a
t
e
d
.
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
	
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
	
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
_
m
r
p
_
s
r
p
_
f
l
a
g
s
_
m
a
t
c
h
(
$
p
t
y
p
e
_
i
d
1
 
=
 
0
,
 
$
p
t
y
p
e
_
i
d
2
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
p
t
y
p
e
_
i
d
1
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
p
t
y
p
e
_
i
d
2
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
l
l
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
g
e
t
_
a
l
l
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
s
[
$
p
t
y
p
e
_
i
d
1
]
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
p
_
s
r
p
_
1
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
s
[
$
p
t
y
p
e
_
i
d
1
]
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
t
y
p
e
 
i
d
 
1
 
d
o
e
s
n
`
t
 
e
x
i
s
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
s
[
$
p
t
y
p
e
_
i
d
2
]
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
p
_
s
r
p
_
2
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
s
[
$
p
t
y
p
e
_
i
d
2
]
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
t
y
p
e
 
i
d
 
2
 
d
o
e
s
n
`
t
 
e
x
i
s
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
p
_
s
r
p
_
1
 
=
=
 
$
m
r
p
_
s
r
p
_
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
_
r
o
o
m
s
_
t
a
r
i
f
f
s
_
s
e
t
t
i
n
g
s
(
$
d
e
l
e
t
e
_
r
o
o
m
s
 
=
 
t
r
u
e
,
 
$
d
e
l
e
t
e
_
t
a
r
i
f
f
s
 
=
 
t
r
u
e
,
 
$
d
e
l
e
t
e
_
s
e
t
t
i
n
g
s
 
=
 
t
r
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
r
o
o
m
s

 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
l
e
t
e
_
r
o
o
m
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
s
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
'
 
L
I
M
I
T
 
1
0
0
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
d
e
l
e
t
e
 
f
r
o
m
 
r
o
o
m
s
 
t
a
b
l
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
f
e
a
t
u
r
e
s
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
'
 
L
I
M
I
T
 
1
0
0
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
d
e
l
e
t
e
 
f
r
o
m
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
t
a
b
l
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
t
a
r
i
f
f
s

 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
l
e
t
e
_
t
a
r
i
f
f
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
a
t
e
s
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
'
 
L
I
M
I
T
 
1
0
0
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
d
e
l
e
t
e
 
f
r
o
m
 
r
a
t
e
s
 
t
a
b
l
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
t
a
r
i
f
f
t
y
p
e
 
x
r
e
f
s

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
'
 
L
I
M
I
T
 
1
0
0
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
d
e
l
e
t
e
 
f
r
o
m
 
t
a
r
i
f
f
t
y
p
e
 
x
r
e
f
 
t
a
b
l
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
p
r
o
p
e
r
t
y
 
s
e
t
t
i
n
g
s

 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
l
e
t
e
_
s
e
t
t
i
n
g
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
'
 
L
I
M
I
T
 
1
0
0
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
d
e
l
e
t
e
 
f
r
o
m
 
s
e
t
t
i
n
g
s
 
t
a
b
l
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
_
p
r
o
p
e
r
t
y
_
s
e
t
t
i
n
g
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
l
l
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
g
e
t
_
p
r
o
p
e
r
t
y
_
t
y
p
e
(
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
)
;


 
 
 
 
 
 
 
 
/
/
 
m
r
p
_
s
r
p
_
f
l
a
g
:

 
 
 
 
 
 
 
 
/
/
 
0
 
-
 
h
o
t
e
l

 
 
 
 
 
 
 
 
/
/
 
1
 
-
 
v
i
l
l
a
/
a
p
a
r
t
m
e
n
t

 
 
 
 
 
 
 
 
/
/
 
2
 
-
 
b
o
t
h
 
-
 
B
C
,
 
r
e
s
e
t
s
 
t
o
 
0

 
 
 
 
 
 
 
 
/
/
 
3
 
-
 
t
o
u
r
s

 
 
 
 
 
 
 
 
/
/
 
4
 
-
 
r
e
a
l
 
e
s
t
a
t
e

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
1
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
2
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
3
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
4
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
	
	
`
a
k
e
y
`
,

	
	
	
	
	
	
	
`
v
a
l
u
e
`

	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
"
,

	
	
	
	
	
	
	
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
,

	
	
	
	
	
	
	
'
"
.
$
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
.
"
'

	
	
	
	
	
	
	
)
,

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
.
"
,

	
	
	
	
	
	
	
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
,

	
	
	
	
	
	
	
'
"
.
$
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
.
"
'

	
	
	
	
	
	
	
)
"
;

 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
n
d
 
n
o
t
 
i
n
s
e
r
t
 
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
a
n
d
 
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
 
s
e
t
t
i
n
g
s
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

	

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
A
p
p
r
o
v
e
d
(
$
a
p
p
r
o
v
e
d
 
=
 
0
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
$
a
p
p
r
o
v
e
d
 
=
=
 
1
)
 
{

	
	
	
$
t
h
i
s
-
>
a
p
p
r
o
v
e
_
p
r
o
p
e
r
t
y
(
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
u
n
a
p
p
r
o
v
e
_
p
r
o
p
e
r
t
y
(
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
a
p
p
r
o
v
e
_
p
r
o
p
e
r
t
y
(
)
 

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
S
E
T
 
`
a
p
p
r
o
v
e
d
`
 
=
 
1
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
n
d
 
n
o
t
 
a
p
p
r
o
v
e
 
p
r
o
p
e
r
t
y
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
 
=
 
1
;

	
	

	
	
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
a
p
p
r
o
v
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
a
p
p
r
o
v
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;

	
	
	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
u
n
a
p
p
r
o
v
e
_
p
r
o
p
e
r
t
y
(
)
 

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
S
E
T
 
`
a
p
p
r
o
v
e
d
`
 
=
 
0
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
n
d
 
n
o
t
 
u
n
a
p
p
r
o
v
e
 
p
r
o
p
e
r
t
y
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
 
=
 
0
;

	
	

	
	
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
u
n
a
p
p
r
o
v
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
u
n
a
p
p
r
o
v
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
P
u
b
l
i
s
h
e
d
(
$
p
u
b
l
i
s
h
e
d
 
=
 
0
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
$
p
u
b
l
i
s
h
e
d
 
=
=
 
1
)
 
{

	
	
	
$
t
h
i
s
-
>
p
u
b
l
i
s
h
_
p
r
o
p
e
r
t
y
(
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
u
n
p
u
b
l
i
s
h
_
p
r
o
p
e
r
t
y
(
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
p
u
b
l
i
s
h
_
p
r
o
p
e
r
t
y
(
)
 

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
S
E
T
 
`
p
u
b
l
i
s
h
e
d
`
 
=
 
1
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
n
d
 
n
o
t
 
p
u
b
l
i
s
h
 
p
r
o
p
e
r
t
y
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
p
u
b
l
i
s
h
e
d
 
=
 
1
;

	
	

	
	
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
p
u
b
l
i
s
h
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
p
u
b
l
i
s
h
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
u
n
p
u
b
l
i
s
h
_
p
r
o
p
e
r
t
y
(
)
 

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
S
E
T
 
`
p
u
b
l
i
s
h
e
d
`
 
=
 
0
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
n
d
 
n
o
t
 
u
n
p
u
b
l
i
s
h
 
p
r
o
p
e
r
t
y
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
p
u
b
l
i
s
h
e
d
 
=
 
0
;

	
	

	
	
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
u
n
p
u
b
l
i
s
h
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
u
n
p
u
b
l
i
s
h
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
C
o
m
p
l
e
t
e
d
(
$
c
o
m
p
l
e
t
e
d
 
=
 
0
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
$
c
o
m
p
l
e
t
e
d
 
=
=
 
1
)
 
{

	
	
	
$
t
h
i
s
-
>
c
o
m
p
l
e
t
e
_
p
r
o
p
e
r
t
y
(
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
i
n
c
o
m
p
l
e
t
e
_
p
r
o
p
e
r
t
y
(
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
o
m
p
l
e
t
e
_
p
r
o
p
e
r
t
y
(
)
 

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
S
E
T
 
`
c
o
m
p
l
e
t
e
d
`
 
=
 
1
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
n
d
 
n
o
t
 
m
a
r
k
 
p
r
o
p
e
r
t
y
 
a
s
 
c
o
m
p
l
e
t
e
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
c
o
m
p
l
e
t
e
d
 
=
 
1
;

	
	

	
	
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
c
o
m
p
l
e
t
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
m
a
r
k
e
d
 
a
s
 
c
o
m
p
l
e
t
e
.
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;

	
	
	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
c
o
m
p
l
e
t
e
_
p
r
o
p
e
r
t
y
(
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
S
E
T
 
`
c
o
m
p
l
e
t
e
d
`
 
=
 
0
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
o
u
n
d
 
n
o
t
 
m
a
r
k
 
p
r
o
p
e
r
t
y
 
a
s
 
i
n
c
o
m
p
l
e
t
e
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
c
o
m
p
l
e
t
e
d
 
=
 
0
;

	
	

	
	
$
w
e
b
h
o
o
k
_
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
p
r
o
p
e
r
t
y
_
i
n
c
o
m
p
l
e
t
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
m
a
r
k
e
d
 
a
s
 
i
n
c
o
m
p
l
e
t
e
.
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
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
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
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
(
$
w
e
b
h
o
o
k
_
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
)
;

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

}

