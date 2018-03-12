
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
5
c
a
n
c
e
l
G
u
e
s
t
B
o
o
k
i
n
g

{

 
 
 
 
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
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n


 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
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
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
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
c
o
n
t
r
a
c
t
_
u
i
d
'
,
 
0
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
G
u
e
s
t
U
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
 
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
g
u
e
s
t
s
 
W
H
E
R
E
 
m
o
s
_
u
s
e
r
i
d
 
=
 
'
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
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
s
_
u
i
d
s
 
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
B
e
c
a
u
s
e
 
a
 
n
e
w
 
r
e
c
o
r
d
 
i
s
 
m
a
d
e
 
i
n
 
t
h
e
 
g
u
e
s
t
s
 
t
a
b
l
e
 
f
o
r
 
e
a
c
h
 
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
h
e
 
g
u
e
s
t
 
r
e
g
i
s
t
e
r
s
 
i
n
,
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
a
l
l
 
t
h
e
 
g
u
e
s
t
 
u
i
d
s
 
f
o
r
 
t
h
i
s
 
u
s
e
r

 
 
 
 
 
 
 
 
 
 
 
 
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
g
u
e
s
t
s
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
g
u
e
s
t
s
_
u
i
d
s
 
a
s
 
$
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
G
u
e
s
t
U
i
d
s
[
 
]
 
=
 
$
g
-
>
g
u
e
s
t
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
*
 
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
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
g
u
e
s
t
_
u
i
d
 
I
N
 
(
"
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
a
l
l
G
u
e
s
t
U
i
d
s
)
.
'
)
 
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
D
a
t
a
 
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
b
o
o
k
i
n
g
D
a
t
a
)
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
o
o
k
i
n
g
D
a
t
a
 
a
s
 
$
b
o
o
k
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
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
b
o
o
k
i
n
g
-
>
g
u
e
s
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
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
b
o
o
k
i
n
g
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
a
r
r
i
v
a
l
 
=
 
$
b
o
o
k
i
n
g
-
>
a
r
r
i
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
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
u
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
d
a
t
e
D
i
f
f
(
$
i
n
t
e
r
v
a
l
,
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
,
 
$
b
o
o
k
i
n
g
_
a
r
r
i
v
a
l
)
 
>
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
c
a
n
c
e
l
l
a
t
i
o
n
_
t
h
r
e
a
s
h
o
l
d
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
a
v
e
M
e
s
s
a
g
e
 
=
 
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
E
D
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
E
D
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
*
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
t
a
g
 
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
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
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
 
'
"
.
(
i
n
t
)
 
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
u
i
d
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
D
a
t
a
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
o
n
t
r
a
c
t
D
a
t
a
 
a
s
 
$
c
a
n
c
e
l
l
a
t
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
g
 
=
 
$
c
a
n
c
e
l
l
a
t
i
o
n
-
>
t
a
g
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
T
o
D
r
o
p
 
=
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
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
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
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
 
'
"
.
(
i
n
t
)
 
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
u
i
d
.
"
'
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
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
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
 
b
o
o
k
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
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
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
c
o
n
t
r
a
c
t
s
 
S
E
T
 
`
c
a
n
c
e
l
l
e
d
`
=
'
1
'
,
 
`
c
a
n
c
e
l
l
e
d
_
t
i
m
e
s
t
a
m
p
`
=
'
"
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
"
'
,
 
`
c
a
n
c
e
l
l
e
d
_
r
e
a
s
o
n
`
=
'
"
.
$
r
e
a
s
o
n
.
"
'
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
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
 
'
"
.
(
i
n
t
)
 
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
u
i
d
.
"
'
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
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
c
a
n
c
e
l
l
a
t
i
o
n
s
 
d
a
t
a
 
f
o
r
 
c
o
n
t
r
a
c
t
'
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
*
/

	
	
	
	
	

	
	
	
	
	
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
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
c
a
n
c
e
l
'
)
;

	
	
	
	
	
$
b
k
g
 
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
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
c
a
n
c
e
l
(
)
;


	
	
	
	
	
$
b
k
g
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
;

	
	
	
	
	
$
b
k
g
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
	
	
	
$
b
k
g
-
>
r
e
a
s
o
n
 
=
 
'
'
;

	
	
	
	
	
$
b
k
g
-
>
n
o
t
e
 
=
 
$
s
a
v
e
M
e
s
s
a
g
e
;


	
	
	
	
	
$
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
 
=
 
$
b
k
g
-
>
c
a
n
c
e
l
_
b
o
o
k
i
n
g
(
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
 
i
n
v
o
i
c
e
 
d
e
t
a
i
l
s
 
(
s
e
t
 
a
s
 
c
a
n
c
e
l
l
e
d
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
i
d
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 

	
	
	
	
	
	
	
	
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
i
d
 
=
 
'
 
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
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

	
	
	
	
	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
u
i
d
 
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
$
i
n
v
o
i
c
e
_
u
i
d
 
>
 
0
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
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
i
d
 
=
 
$
i
n
v
o
i
c
e
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
g
e
t
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
c
a
n
c
e
l
l
e
d
(
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
 
'
S
E
L
E
C
T
 
e
m
a
i
l
,
f
i
r
s
t
n
a
m
e
,
s
u
r
n
a
m
e
 
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
g
u
e
s
t
s
 
W
H
E
R
E
 
g
u
e
s
t
s
_
u
i
d
 
=
 
'
.
$
g
u
e
s
t
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
D
a
t
a
 
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
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
=
 
$
t
a
g
.
'
 
-
 
'
.
$
s
a
v
e
M
e
s
s
a
g
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
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
i
d
'
 
]
 
=
 
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
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
2
1
6
3
'
,
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
s
a
v
e
M
e
s
s
a
g
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
H
a
c
k
 
a
t
t
a
c
k
:
 
T
r
i
e
d
 
t
o
 
c
a
n
c
e
l
 
a
 
b
o
o
k
i
n
g
 
t
h
a
t
 
w
a
s
 
w
i
t
h
i
n
 
t
h
e
 
c
a
n
c
e
l
l
a
t
i
o
n
 
t
h
r
e
a
s
h
o
l
d
.
 
 
G
u
e
s
t
 
u
i
d
 
'
.
$
g
u
e
s
t
_
u
i
d
.
'
 
B
o
o
k
i
n
g
 
u
i
d
 
'
.
$
c
o
n
t
r
a
c
t
_
u
i
d
.
'
 
D
a
t
e
 
d
i
f
f
 
'
.
d
a
t
e
D
i
f
f
(
$
i
n
t
e
r
v
a
l
,
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
,
 
$
b
o
o
k
i
n
g
_
a
r
r
i
v
a
l
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
e
d
i
t
B
o
o
k
i
n
g
_
h
t
m
l
(
$
c
o
n
t
r
a
c
t
_
u
i
d
,
 
$
b
o
o
k
i
n
g
D
a
t
a
,
 
$
e
x
t
r
a
B
i
l
l
i
n
g
D
a
t
a
,
 
$
g
u
e
s
t
D
a
t
a
,
 
$
r
o
o
m
B
o
o
k
i
n
g
D
a
t
a
,
 
$
r
o
o
m
I
n
f
o
,
 
$
r
o
o
m
C
l
a
s
s
,
 
$
r
o
o
m
F
e
a
t
u
r
e
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
p
o
p
u
p
 
=
 
g
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
o
p
u
p
'
)
;

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
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

 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
P
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
P
r
o
p
e
r
t
y
 
=
=
 
'
0
'
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
%
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
g
u
e
s
t
D
a
t
a
)
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
f
i
r
s
t
n
a
m
e
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
s
u
r
n
a
m
e
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
u
i
d
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
m
o
s
_
u
s
e
r
i
d
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
h
o
u
s
e
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
s
t
r
e
e
t
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
o
w
n
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
r
e
g
i
o
n
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
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
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
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
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
e
l
_
f
a
x
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
e
m
a
i
l
 
=
 
'
N
/
A
'
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
p
r
e
f
e
r
e
n
c
e
s
 
=
 
'
N
/
A
'
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
g
u
e
s
t
D
a
t
a
 
a
s
 
$
g
u
e
s
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
f
i
r
s
t
n
a
m
e
 
=
 
$
g
u
e
s
t
-
>
f
i
r
s
t
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
s
u
r
n
a
m
e
 
=
 
$
g
u
e
s
t
-
>
s
u
r
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
u
i
d
 
=
 
$
g
u
e
s
t
-
>
g
u
e
s
t
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
m
o
s
_
u
s
e
r
i
d
 
=
 
$
g
u
e
s
t
-
>
m
o
s
_
u
s
e
r
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
h
o
u
s
e
 
=
 
$
g
u
e
s
t
-
>
h
o
u
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
s
t
r
e
e
t
 
=
 
$
g
u
e
s
t
-
>
s
t
r
e
e
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
o
w
n
 
=
 
$
g
u
e
s
t
-
>
t
o
w
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
r
e
g
i
o
n
 
=
 
$
g
u
e
s
t
-
>
c
o
u
n
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
c
o
u
n
t
r
y
 
=
 
$
g
u
e
s
t
-
>
c
o
u
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
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
 
$
g
u
e
s
t
-
>
p
o
s
t
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
$
g
u
e
s
t
-
>
t
e
l
_
l
a
n
d
l
i
n
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
 
=
 
$
g
u
e
s
t
-
>
t
e
l
_
m
o
b
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
e
l
_
f
a
x
 
=
 
$
g
u
e
s
t
-
>
t
e
l
_
f
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
e
m
a
i
l
 
=
 
$
g
u
e
s
t
-
>
e
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
p
r
e
f
e
r
e
n
c
e
s
 
=
 
$
g
u
e
s
t
-
>
p
r
e
f
e
r
e
n
c
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
c
a
r
_
r
e
g
n
o
 
=
 
$
g
u
e
s
t
-
>
c
a
r
_
r
e
g
n
o
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
c
c
a
r
d
_
n
o
 
=
 
$
g
u
e
s
t
-
>
c
c
a
r
d
_
n
o
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
c
c
a
r
d
_
i
s
s
u
e
d
 
=
 
$
g
u
e
s
t
-
>
c
c
a
r
d
_
i
s
s
u
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
c
c
a
r
d
_
e
x
p
i
r
y
 
=
 
$
g
u
e
s
t
-
>
c
c
a
r
d
_
e
x
p
i
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
c
c
a
r
d
_
i
s
s
_
n
o
 
=
 
$
g
u
e
s
t
-
>
c
c
a
r
d
_
i
s
s
_
n
o
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
c
c
a
r
d
_
n
a
m
e
 
=
 
$
g
u
e
s
t
-
>
c
c
a
r
d
_
n
a
m
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
o
o
k
i
n
g
D
a
t
a
 
a
s
 
$
b
o
o
k
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
t
a
g
 
=
 
$
b
o
o
k
i
n
g
-
>
t
a
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
$
b
o
o
k
i
n
g
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
a
r
r
i
v
a
l
 
=
 
$
b
o
o
k
i
n
g
-
>
a
r
r
i
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
d
e
p
a
r
t
u
r
e
 
=
 
$
b
o
o
k
i
n
g
-
>
d
e
p
a
r
t
u
r
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
a
t
e
s
_
u
i
d
 
=
 
$
b
o
o
k
i
n
g
-
>
r
a
t
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
a
t
e
_
r
u
l
e
s
 
=
 
$
b
o
o
k
i
n
g
-
>
r
a
t
e
_
r
u
l
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
p
a
i
d
 
=
 
$
b
o
o
k
i
n
g
-
>
d
e
p
o
s
i
t
_
p
a
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
$
b
o
o
k
i
n
g
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
$
b
o
o
k
i
n
g
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
,
'
,
 
'
'
,
 
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
r
e
f
 
=
 
$
b
o
o
k
i
n
g
-
>
d
e
p
o
s
i
t
_
r
e
f
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
y
m
e
n
t
_
r
e
f
 
=
 
$
b
o
o
k
i
n
g
-
>
p
a
y
m
e
n
t
_
r
e
f
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
s
p
e
c
i
a
l
_
r
e
q
s
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
b
o
o
k
i
n
g
-
>
s
p
e
c
i
a
l
_
r
e
q
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
n
e
w
s
l
e
t
t
e
r
s
 
=
 
$
b
o
o
k
i
n
g
-
>
n
e
w
s
l
e
t
t
e
r
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
c
u
r
r
e
n
c
y
 
=
 
$
b
o
o
k
i
n
g
-
>
c
u
r
r
e
n
c
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
 
=
 
$
b
o
o
k
i
n
g
-
>
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
=
 
$
b
o
o
k
i
n
g
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
O
p
t
i
o
n
s
L
i
s
t
 
=
 
$
b
o
o
k
i
n
g
-
>
e
x
t
r
a
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
O
p
t
i
o
n
s
V
a
l
u
e
 
=
 
$
b
o
o
k
i
n
g
-
>
e
x
t
r
a
s
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
 
=
 
$
b
o
o
k
i
n
g
-
>
t
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
i
n
 
=
 
$
b
o
o
k
i
n
g
-
>
b
o
o
k
e
d
_
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
r
i
a
n
c
e
s
 
=
 
$
b
o
o
k
i
n
g
-
>
r
a
t
e
_
r
u
l
e
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
g
u
e
s
t
t
y
p
e
O
u
t
p
u
t
 
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
v
a
r
i
a
n
c
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
v
a
r
i
a
n
c
e
s
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
v
a
r
i
a
n
c
e
A
r
r
a
y
 
a
s
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
D
e
e
t
s
 
=
 
e
x
p
l
o
d
e
(
'
_
'
,
 
$
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
D
e
e
t
s
[
 
0
 
]
 
=
=
 
'
g
u
e
s
t
t
y
p
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
u
 
=
 
$
v
D
e
e
t
s
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
q
 
=
 
$
v
D
e
e
t
s
[
 
2
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
v
 
=
 
$
v
D
e
e
t
s
[
 
3
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
t
y
p
e
`
 
F
R
O
M
 
`
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
c
u
s
t
o
m
e
r
t
y
p
e
s
`
 
w
h
e
r
e
 
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
v
u
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
t
i
t
l
e
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
t
y
p
e
O
u
t
p
u
t
[
 
]
 
=
 
a
r
r
a
y
(
'
t
i
t
l
e
'
 
=
>
 
$
v
t
i
t
l
e
,
 
'
q
t
y
'
 
=
>
 
$
v
q
,
 
'
v
a
l
u
e
'
 
=
>
 
$
v
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
o
o
m
B
o
o
k
i
n
g
D
a
t
a
 
a
s
 
$
r
o
o
m
B
o
o
k
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
i
n
g
_
u
i
d
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
i
n
g
_
b
l
a
c
k
_
b
o
o
k
i
n
g
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
b
l
a
c
k
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
i
n
g
_
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
i
n
g
_
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
r
m
I
n
f
o
 
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
o
o
m
I
n
f
o
 
a
s
 
$
r
I
n
f
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
I
n
f
o
_
u
i
d
 
=
 
$
r
I
n
f
o
-
>
r
o
o
m
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
I
n
f
o
_
n
a
m
e
 
=
 
$
r
I
n
f
o
-
>
r
o
o
m
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
I
n
f
o
_
n
u
m
b
e
r
 
=
 
$
r
I
n
f
o
-
>
r
o
o
m
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
I
n
f
o
_
r
o
o
m
_
f
l
o
o
r
 
=
 
$
r
I
n
f
o
-
>
r
o
o
m
_
f
l
o
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
I
n
f
o
_
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
 
=
 
$
r
I
n
f
o
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
I
n
f
o
_
t
y
p
e
 
=
 
$
r
I
n
f
o
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
I
n
f
o
[
 
]
 
=
 
a
r
r
a
y
(
'
r
I
n
f
o
_
n
a
m
e
'
 
=
>
 
$
r
I
n
f
o
_
n
a
m
e
,
 
'
r
I
n
f
o
_
n
u
m
b
e
r
'
 
=
>
 
$
r
I
n
f
o
_
n
u
m
b
e
r
,
 
'
r
I
n
f
o
_
r
o
o
m
_
f
l
o
o
r
'
 
=
>
 
$
r
I
n
f
o
_
r
o
o
m
_
f
l
o
o
r
,
 
'
r
I
n
f
o
_
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
'
 
=
>
 
$
r
I
n
f
o
_
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
,
 
'
r
I
n
f
o
_
t
y
p
e
'
 
=
>
 
$
r
I
n
f
o
_
t
y
p
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
o
o
m
C
l
a
s
s
 
a
s
 
$
r
C
l
a
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
C
l
a
s
s
_
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
 
=
 
$
r
C
l
a
s
s
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
C
l
a
s
s
_
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
_
a
b
b
v
 
=
 
$
r
C
l
a
s
s
-
>
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
_
a
b
b
v
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
C
l
a
s
s
_
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
_
f
u
l
l
_
d
e
s
c
 
=
 
$
r
C
l
a
s
s
-
>
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
_
f
u
l
l
_
d
e
s
c
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
p
a
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
P
a
i
d
 
=
 
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
C
O
M
_
M
R
_
Y
E
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
C
O
M
_
M
R
_
Y
E
S
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
P
a
i
d
 
=
 
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
C
O
M
_
M
R
_
N
O
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
C
O
M
_
M
R
_
N
O
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
b
o
o
k
e
d
i
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
a
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
o
m
r
e
s
_
t
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
c
a
n
c
e
l
b
o
o
k
i
n
g
'
,
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
"
&
t
a
s
k
=
c
a
n
c
e
l
G
u
e
s
t
B
o
o
k
i
n
g
&
p
o
p
u
p
=
1
&
c
o
n
t
r
a
c
t
_
u
i
d
=
$
b
o
o
k
i
n
g
_
c
o
n
t
r
a
c
t
_
u
i
d
"
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
j
r
t
b
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
"
<
d
i
v
 
i
d
=
'
j
o
m
r
e
s
m
e
n
u
_
h
i
n
t
'
 
s
t
y
l
e
=
c
o
l
o
r
:
r
e
d
;
 
>
&
n
b
s
p
;
<
/
d
i
v
>
"
;

 
 
 
 
 
 
 
 
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
c
o
n
t
e
n
t
_
t
a
b
s
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
 
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
c
o
n
t
e
n
t
_
t
a
b
s
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
T
a
b
s
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
A
R
R
I
V
A
L
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
A
R
R
I
V
A
L
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

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'
<
t
a
b
l
e
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
E
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
E
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
u
c
f
i
r
s
t
(
$
g
u
e
s
t
_
f
i
r
s
t
n
a
m
e
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
S
U
R
N
A
M
E
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
S
U
R
N
A
M
E
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
u
c
f
i
r
s
t
(
$
g
u
e
s
t
_
s
u
r
n
a
m
e
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
D
a
t
e
(
$
b
o
o
k
i
n
g
_
a
r
r
i
v
a
l
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
D
a
t
e
(
$
b
o
o
k
i
n
g
_
d
e
p
a
r
t
u
r
e
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
<
b
>
'
 
.
u
c
f
i
r
s
t
(
$
b
o
o
k
i
n
g
_
s
p
e
c
i
a
l
_
r
e
q
s
)
.
'
<
/
b
>
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
<
/
t
a
b
l
e
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
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

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'
<
t
a
b
l
e
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
u
c
f
i
r
s
t
(
$
g
u
e
s
t
_
h
o
u
s
e
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
u
c
f
i
r
s
t
(
$
g
u
e
s
t
_
s
t
r
e
e
t
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
u
c
f
i
r
s
t
(
$
g
u
e
s
t
_
t
o
w
n
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
V
R
C
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
H
E
A
D
E
R
_
R
E
G
I
O
N
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
C
O
M
_
M
R
_
V
R
C
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
H
E
A
D
E
R
_
R
E
G
I
O
N
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
u
c
f
i
r
s
t
(
$
g
u
e
s
t
_
r
e
g
i
o
n
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
V
R
C
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
H
E
A
D
E
R
_
C
O
U
N
T
R
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
C
O
M
_
M
R
_
V
R
C
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
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
u
c
f
i
r
s
t
(
$
g
u
e
s
t
_
c
o
u
n
t
r
y
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>


	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
s
t
r
t
o
u
p
p
e
r
(
$
g
u
e
s
t
_
p
o
s
t
c
o
d
e
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
g
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
g
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
<
/
t
a
b
l
e
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
R
O
O
M
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
R
O
O
M
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

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'
<
t
a
b
l
e
>
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
B
o
o
k
i
n
g
_
b
l
a
c
k
_
b
o
o
k
i
n
g
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
T
y
p
e
 
=
 
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
K
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
K
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
r
o
o
m
B
o
o
k
i
n
g
_
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
T
y
p
e
 
=
 
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
P
T
I
O
N
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
P
T
I
O
N
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
T
y
p
e
 
=
 
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
E
T
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
E
T
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
E
X
P
L
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
E
X
P
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
b
o
o
k
i
n
g
T
y
p
e
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
<
/
t
r
>
'
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
m
I
n
f
o
 
a
s
 
$
r
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
A
M
E
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
A
M
E
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
r
i
[
 
'
r
I
n
f
o
_
n
a
m
e
'
 
]
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
U
M
B
E
R
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
U
M
B
E
R
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
r
i
[
 
'
r
I
n
f
o
_
n
u
m
b
e
r
'
 
]
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
L
O
O
R
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
L
O
O
R
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
r
i
[
 
'
r
I
n
f
o
_
r
o
o
m
_
f
l
o
o
r
'
 
]
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
P
E
O
P
L
E
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
P
E
O
P
L
E
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
r
i
[
 
'
r
I
n
f
o
_
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
'
 
]
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
i
t
 
=
 
$
r
i
[
 
'
r
I
n
f
o
_
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
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
_
a
b
b
v
 
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
c
l
a
s
s
e
s
 
W
H
E
R
E
 
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
 
=
 
'
"
.
(
i
n
t
)
 
$
r
i
t
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
y
p
e
 
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

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
t
y
p
e
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
<
/
t
r
>
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'
<
/
t
a
b
l
e
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;


 
 
 
 
 
 
 
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
P
A
Y
M
E
N
T
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
P
A
Y
M
E
N
T
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

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'
<
t
a
b
l
e
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
d
e
p
o
s
i
t
P
a
i
d
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
C
O
N
T
R
A
C
T
_
T
O
T
A
L
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
C
O
N
T
R
A
C
T
_
T
O
T
A
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
c
o
u
n
t
(
e
x
p
l
o
d
e
(
'
,
'
,
 
$
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
R
E
F
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
R
E
F
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
r
e
f
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
F
R
O
N
T
_
R
O
O
M
T
A
X
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
C
O
M
_
F
R
O
N
T
_
R
O
O
M
T
A
X
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
a
x
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
E
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
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
E
S
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
&
n
b
s
p
;
<
/
t
d
>

	
	
	
<
/
t
r
>
'
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
g
u
e
s
t
t
y
p
e
O
u
t
p
u
t
 
a
s
 
$
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'
<
t
r
>
<
t
d
>
'
.
$
t
y
p
e
[
 
'
t
i
t
l
e
'
 
]
.
'
<
/
t
d
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'
<
t
d
>
'
.
$
t
y
p
e
[
 
'
q
t
y
'
 
]
.
'
&
n
b
s
p
;
'
.
'
<
/
t
d
>
<
/
t
r
>
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
X
T
R
A
_
T
I
T
L
E
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
C
O
M
_
M
R
_
E
X
T
R
A
_
T
I
T
L
E
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
&
n
b
s
p
;
<
/
t
d
>

	
	
	
<
/
t
r
>
'
)
;

 
 
 
 
 
 
 
 
$
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
e
x
t
r
a
O
p
t
i
o
n
s
L
i
s
t
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
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
 
a
s
 
$
e
x
t
r
a
U
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
n
a
m
e
,
p
r
i
c
e
 
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
e
x
t
r
a
s
 
W
H
E
R
E
 
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
e
x
t
r
a
U
i
d
.
"
'
 
O
R
D
E
R
 
B
Y
 
n
a
m
e
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
L
i
s
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
e
x
t
r
a
s
L
i
s
t
 
a
s
 
$
t
h
e
E
x
t
r
a
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
	
	
<
t
r
>

	
	
	
	
	
	
<
t
d
>
&
n
b
s
p
;
<
/
t
d
>

	
	
	
	
	
	
<
t
d
>
'
 
.
(
$
t
h
e
E
x
t
r
a
s
-
>
n
a
m
e
)
.
'
,
 
 
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
h
e
E
x
t
r
a
s
-
>
p
r
i
c
e
)
.
'
<
/
t
d
>

	
	
	
	
	
<
/
t
r
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
O
T
A
L
I
N
V
O
I
C
E
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
O
T
A
L
I
N
V
O
I
C
E
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
e
x
t
r
a
s
O
p
t
i
o
n
s
V
a
l
u
e
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
D
E
S
C
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
D
E
S
C
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
)
;

 
 
 
 
 
 
 
 
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
e
x
t
r
a
B
i
l
l
i
n
g
D
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
e
x
t
r
a
B
i
l
l
i
n
g
D
a
t
a
 
a
s
 
$
e
x
t
r
a
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
r
v
i
c
e
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
 
$
e
x
t
r
a
s
-
>
s
e
r
v
i
c
e
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
r
v
i
c
e
_
v
a
l
u
e
 
=
 
$
e
x
t
r
a
s
-
>
s
e
r
v
i
c
e
_
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
$
s
e
r
v
i
c
e
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
'
 
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
s
e
r
v
i
c
e
_
v
a
l
u
e
)
.
'
<
b
r
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
=
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
$
s
e
r
v
i
c
e
_
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
	
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
	
<
t
d
>
<
h
r
>
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
I
N
V
O
I
C
E
_
L
E
T
T
E
R
_
G
R
A
N
D
T
O
T
A
L
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
C
O
M
_
I
N
V
O
I
C
E
_
L
E
T
T
E
R
_
G
R
A
N
D
T
O
T
A
L
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
$
b
o
o
k
i
n
g
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
)
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
p
a
i
d
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
a
i
n
d
e
r
t
o
p
a
y
 
=
 
(
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
$
b
o
o
k
i
n
g
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
)
 
-
 
$
b
o
o
k
i
n
g
_
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
a
i
n
d
e
r
t
o
p
a
y
 
=
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
$
b
o
o
k
i
n
g
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
'

	
	
	
<
t
r
>

	
	
	
	
<
t
d
>
'
 
.
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
R
E
M
A
I
N
D
E
R
T
O
P
A
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
R
E
M
A
I
N
D
E
R
T
O
P
A
Y
'
)
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
<
b
>
'
 
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
r
e
m
a
i
n
d
e
r
t
o
p
a
y
)
.
'
<
/
b
>
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
<
/
t
a
b
l
e
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
T
a
b
s
(
)
;

 
 
 
 
}


/
*
*

 
*
 
M
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
 
m
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
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
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
h
e
 
t
h
e
 
m
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
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
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
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

