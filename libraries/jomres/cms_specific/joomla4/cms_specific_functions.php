
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
 
i
s
 
c
u
r
r
e
n
t
l
y
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
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
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
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


f
u
n
c
t
i
o
n
 
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
_
c
m
s
_
f
i
l
e
s
_
t
o
_
n
o
t
_
b
a
c
k
t
r
a
c
e
(
)

{

 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
'
a
p
p
l
i
c
a
t
i
o
n
.
p
h
p
'
,
 
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
.
c
l
a
s
s
.
p
h
p
'
,
 
'
s
i
t
e
.
p
h
p
'
,
 
'
c
m
s
.
p
h
p
'
,
 
'
h
e
l
p
e
r
.
p
h
p
'
)
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
s
e
s
s
i
o
n
i
d
(
)

{

 
 
 
 
$
s
e
s
s
i
o
n
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
S
e
s
s
i
o
n
(
)
;

	

	
r
e
t
u
r
n
 
$
s
e
s
s
i
o
n
-
>
g
e
t
I
d
(
)
;

}


/
/
 
D
a
t
e
 
i
s
 
s
e
n
t
 
i
n
 
f
o
r
m
a
t
 
Y
Y
Y
Y
/
m
m
/
d
d
,
 
e
.
g
.
 
2
0
1
3
/

/
/
 
h
t
t
p
s
:
/
/
d
o
c
s
.
j
o
o
m
l
a
.
o
r
g
/
A
P
I
1
6
:
J
H
t
m
l
/
d
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
o
u
t
p
u
t
_
d
a
t
e
(
$
d
a
t
e
,
 
$
f
o
r
m
a
t
 
=
 
f
a
l
s
e
)

{

 
 
 
 
i
f
 
(
!
$
f
o
r
m
a
t
)
 
{

 
 
 
 
 
 
 
 
$
f
o
r
m
a
t
 
=
 
J
T
e
x
t
:
:
_
(
'
D
A
T
E
_
F
O
R
M
A
T
_
L
C
'
)
;

 
 
 
 
}


 
 
 
 
$
r
e
s
u
l
t
 
=
 
J
H
t
m
l
:
:
d
a
t
e
(
$
d
a
t
e
,
 
$
f
o
r
m
a
t
,
 
$
u
s
e
r
t
i
m
e
z
o
n
e
 
=
 
f
a
l
s
e
)
;


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
r
e
g
i
s
t
r
a
t
i
o
n
l
i
n
k
(
)

{

 
 
 
 
r
e
t
u
r
n
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
u
s
e
r
s
&
v
i
e
w
=
r
e
g
i
s
t
r
a
t
i
o
n
'
)
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
l
o
g
o
u
t
_
t
a
s
k
(
)

{

 
 
 
 
r
e
t
u
r
n
 
'
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
u
s
e
r
s
&
v
i
e
w
=
l
o
g
i
n
'
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
l
o
g
i
n
_
t
a
s
k
(
)

{

 
 
 
 
r
e
t
u
r
n
 
'
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
u
s
e
r
s
&
v
i
e
w
=
l
o
g
i
n
'
;

}


f
u
n
c
t
i
o
n
 
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

{

 
 
 
 
$
a
d
m
i
n
i
s
t
r
a
t
o
r
_
a
r
e
a
 
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
s
t
r
p
o
s
(
$
_
S
E
R
V
E
R
[
 
'
S
C
R
I
P
T
_
N
A
M
E
'
 
]
,
 
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
)
)
 
{

 
 
 
 
 
 
 
 
$
a
d
m
i
n
i
s
t
r
a
t
o
r
_
a
r
e
a
 
=
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
a
d
m
i
n
i
s
t
r
a
t
o
r
_
a
r
e
a
;

}


f
u
n
c
t
i
o
n
 
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
c
r
e
a
t
e
N
e
w
U
s
e
r
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
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


 
 
 
 
$
i
d
 
=
 
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
g
u
e
s
t
D
e
e
t
s
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
G
u
e
s
t
D
a
t
a
(
)
;


 
 
 
 
 
 
 
 
/
/
I
f
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
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
,
 
w
e
'
l
l
 
n
o
t
 
b
o
t
h
e
r
 
c
a
r
r
y
i
n
g
 
o
n
,
 
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
 
t
h
i
s
 
u
s
e
r
'
s
 
"
m
o
s
_
i
d
"

 
 
 
 
 
 
 
 
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
i
d
`
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
`
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
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
.
"
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
e
x
i
s
t
i
n
g
 
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
e
x
i
s
t
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
e
x
i
s
t
i
n
g
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
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
D
e
e
t
s
[
 
'
f
i
r
s
t
n
a
m
e
'
 
]
.
'
 
'
.
$
g
u
e
s
t
D
e
e
t
s
[
 
'
s
u
r
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
$
u
s
e
r
t
y
p
e
 
=
 
'
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
'
;

 
 
 
 
 
 
 
 
$
b
l
o
c
k
 
=
 
'
0
'
;


 
 
 
 
 
 
 
 
$
p
a
s
s
w
o
r
d
 
=
 
J
o
o
m
l
a
\
C
M
S
\
U
s
e
r
\
U
s
e
r
H
e
l
p
e
r
:
:
g
e
n
R
a
n
d
o
m
P
a
s
s
w
o
r
d
(
)
;

 
 
 
 
 
 
 
 
$
e
n
c
r
y
p
t
e
d
P
a
s
s
w
o
r
d
 
=
 
J
o
o
m
l
a
\
C
M
S
\
U
s
e
r
\
U
s
e
r
H
e
l
p
e
r
:
:
g
e
t
C
r
y
p
t
e
d
P
a
s
s
w
o
r
d
(
$
p
a
s
s
w
o
r
d
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
u
s
e
r
s
 
(

	
	
	
`
n
a
m
e
`
,

	
	
	
`
u
s
e
r
n
a
m
e
`
,

	
	
	
`
e
m
a
i
l
`
,

	
	
	
`
p
a
s
s
w
o
r
d
`
,

	
	
	
`
r
e
g
i
s
t
e
r
D
a
t
e
`
,

	
	
	
`
l
a
s
t
v
i
s
i
t
D
a
t
e
`
,

	
	
	
`
l
a
s
t
R
e
s
e
t
T
i
m
e
`
,

	
	
	
`
p
a
r
a
m
s
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
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
.
"
'
,

	
	
	
'
"
 
.
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
.
"
'
,

	
	
	
'
"
 
.
$
e
n
c
r
y
p
t
e
d
P
a
s
s
w
o
r
d
.
"
'
,

	
	
	
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

	
	
	
'
{
}
'

	
	
	
)
 
"
;

 
 
 
 
 
 
 
 
$
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
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
d
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
F
a
i
l
e
d
 
i
n
s
e
r
t
 
n
e
w
 
u
s
e
r
 
'
.
$
q
u
e
r
y
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
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
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
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
u
s
e
r
_
u
s
e
r
g
r
o
u
p
_
m
a
p
 
 
(

	
	
	
	
`
u
s
e
r
_
i
d
`
,

	
	
	
	
`
g
r
o
u
p
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
i
d
.
"
'
,

	
	
	
	
2

	
	
	
	
)
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
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
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
=
t
r
u
e
;
 
/
/
 
D
i
s
a
b
l
e
d
 
a
s
 
t
h
i
s
 
s
e
t
t
i
n
g
 
w
o
u
l
d
 
b
e
 
i
n
c
o
r
r
e
c
t
 
d
u
r
i
n
g
 
t
h
e
 
b
o
o
k
i
n
g
 
p
h
a
s
e
.
 
W
e
 
w
a
n
t
 
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
 
u
s
e
r
s
 
t
o
 
h
a
v
e
 
t
h
e
i
r
 
d
e
t
a
i
l
s
 
r
e
c
o
r
d
e
d
 
b
y
 
t
h
e
 
i
n
s
e
r
t
G
u
e
s
t
D
e
e
t
s
 
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
n
s
e
r
t
b
o
o
k
i
n
g
s

 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
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
'
,
 
$
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
j
e
c
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
S
U
B
J
E
C
T
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
S
U
B
J
E
C
T
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
t
e
x
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
D
E
A
R
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
D
E
A
R
'
,
 
f
a
l
s
e
)
.
'
 
'
.
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
g
u
e
s
t
D
e
e
t
s
[
 
'
f
i
r
s
t
n
a
m
e
'
 
]
)
.
'
 
'
.
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
g
u
e
s
t
D
e
e
t
s
[
 
'
s
u
r
n
a
m
e
'
 
]
)
.
'
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
'
,
 
f
a
l
s
e
)
.
'
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
U
S
E
R
N
A
M
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
U
S
E
R
N
A
M
E
'
,
 
f
a
l
s
e
)
.
'
 
'
.
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
.
'
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
D
'
,
 
f
a
l
s
e
)
.
'
 
'
.
$
p
a
s
s
w
o
r
d
.
'
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
L
O
G
_
I
N
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
L
O
G
_
I
N
'
,
 
f
a
l
s
e
)
.
'
 
'
.
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
l
i
v
e
_
s
i
t
e
'
)
.
'
<
b
r
 
/
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
u
s
e
N
e
w
u
s
e
r
s
_
s
e
n
d
e
m
a
i
l
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
M
a
i
l
e
r
(
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
m
a
i
l
f
r
o
m
'
)
,
 
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
f
r
o
m
n
a
m
e
'
)
,
 
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
,
 
$
s
u
b
j
e
c
t
,
 
$
t
e
x
t
,
 
$
m
o
d
e
 
=
 
1
)
)
 
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
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
r
e
g
i
s
t
r
a
t
i
o
n
 
e
m
a
i
l
 
t
o
 
g
u
e
s
t
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
h
o
t
e
l
e
m
a
i
l
.
'
 
S
u
b
j
e
c
t
'
.
$
s
u
b
j
e
c
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
i
d
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
R
e
g
i
s
t
r
a
t
i
o
n
U
R
L
(
)

{

}


f
u
n
c
t
i
o
n
 
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
g
e
t
T
e
x
t
E
d
i
t
o
r
(
$
n
a
m
e
,
 
$
c
o
n
t
e
n
t
,
 
$
h
i
d
d
e
n
F
i
e
l
d
,
 
$
w
i
d
t
h
,
 
$
h
e
i
g
h
t
,
 
$
c
o
l
,
 
$
r
o
w
)

{

 
 
 
 
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


 
 
 
 
/
/
 
 
M
o
r
e
 
t
r
o
u
b
l
e
 
t
h
a
n
 
i
t
 
i
s
 
w
o
r
t
h
 
a
t
m
,
 
i
f
 
s
o
m
e
b
o
d
y
 
e
n
t
e
r
s
 
s
o
m
e
t
h
i
n
g
 
t
h
a
t
 
c
r
e
a
t
e
s
 
a
 
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
 
e
r
r
o
r
 
t
h
e
 
e
d
i
t
o
r
 
c
r
a
s
h
e
s
 
a
n
d
 
b
u
r
n
s

 
 
 
 
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
u
s
e
_
j
o
m
r
e
s
_
o
w
n
_
e
d
i
t
o
r
'
 
]
 
=
 
'
0
'
;


 
 
 
 
i
f
 
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
u
s
e
_
j
o
m
r
e
s
_
o
w
n
_
e
d
i
t
o
r
'
 
]
 
=
=
 
'
1
'
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

 
 
 
 
 
 
 
 
$
r
e
t
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
5
'
,
 
'
e
d
i
t
o
r
'
,
 
a
r
r
a
y
(
'
n
a
m
e
'
 
=
>
 
$
n
a
m
e
,
 
'
c
o
n
t
e
n
t
'
 
=
>
 
$
c
o
n
t
e
n
t
,
 
'
h
e
i
g
h
t
'
 
=
>
 
$
h
e
i
g
h
t
)
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
e
d
i
t
o
r
 
=
 
J
o
o
m
l
a
\
C
M
S
\
E
d
i
t
o
r
\
E
d
i
t
o
r
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
)
;

 
 
 
 
 
 
 
 
$
r
e
t
 
=
 
$
e
d
i
t
o
r
-
>
d
i
s
p
l
a
y
(
$
n
a
m
e
,
 
$
c
o
n
t
e
n
t
,
 
$
w
i
d
t
h
,
 
$
h
e
i
g
h
t
,
 
$
c
o
l
,
 
$
r
o
w
,
 
f
a
l
s
e
)
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
r
e
t
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
c
u
r
r
e
n
t
u
s
e
r
s
_
i
d
(
)

{

 
 
 
 
$
i
d
 
=
 
0
;

 
 
 
 

	
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

	
	
$
u
s
e
r
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
U
s
e
r
(
)
;

	
	
$
i
d
 
=
 
$
u
s
e
r
-
>
g
e
t
(
'
i
d
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
 
$
i
d
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
c
u
r
r
e
n
t
u
s
e
r
s
_
u
s
e
r
n
a
m
e
(
)

{

 
 
 
 
$
u
s
e
r
n
a
m
e
 
=
 
'
'
;

 
 
 
 
$
u
s
e
r
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
U
s
e
r
(
)
;

 
 
 
 
$
u
s
e
r
n
a
m
e
 
=
 
$
u
s
e
r
-
>
g
e
t
(
'
u
s
e
r
n
a
m
e
'
)
;


 
 
 
 
r
e
t
u
r
n
 
$
u
s
e
r
n
a
m
e
;

}


f
u
n
c
t
i
o
n
 
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
d
d
h
e
a
d
d
a
t
a
(
$
t
y
p
e
,
 
$
p
a
t
h
 
=
 
'
'
,
 
$
f
i
l
e
n
a
m
e
 
=
 
'
'
,
 
$
i
n
c
l
u
d
e
V
e
r
s
i
o
n
 
=
 
t
r
u
e
,
 
$
a
s
y
n
c
 
=
 
f
a
l
s
e
)

{

 
 
 
 
i
f
 
(
$
f
i
l
e
n
a
m
e
 
=
=
 
'
'
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
d
o
c
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
D
o
c
u
m
e
n
t
(
)
;


 
 
 
 
J
H
t
m
l
:
:
_
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
f
r
a
m
e
w
o
r
k
'
)
;


 
 
 
 
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
i
n
c
l
u
d
e
V
e
r
s
i
o
n
 
?
 
$
v
e
r
s
i
o
n
 
=
 
'
?
v
=
'
.
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
u
p
d
a
t
e
_
t
i
m
e
'
]
 
:
 
$
v
e
r
s
i
o
n
 
=
 
'
'
;


 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
p
a
t
h
,
 
'
h
t
t
p
'
)
 
=
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
$
d
a
t
a
 
=
 
J
U
R
I
:
:
b
a
s
e
(
t
r
u
e
)
.
'
/
'
.
$
p
a
t
h
.
$
f
i
l
e
n
a
m
e
.
$
v
e
r
s
i
o
n
;

 
 
 
 
 
 
 
 
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
d
a
t
a
 
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
/
a
d
m
i
n
i
s
t
r
a
t
o
r
/
'
,
 
'
/
'
,
 
$
d
a
t
a
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
d
a
t
a
 
=
 
$
p
a
t
h
.
$
f
i
l
e
n
a
m
e
.
$
v
e
r
s
i
o
n
;

 
 
 
 
}


 
 
 
 
s
w
i
t
c
h
 
(
$
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
'
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
'
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
J
H
T
M
L
:
:
s
c
r
i
p
t
(
 
$
p
a
t
h
 
.
 
$
f
i
l
e
n
a
m
e
,
 
f
a
l
s
e
 
)
;
 
/
/
 
I
f
 
w
e
 
w
a
n
t
 
t
o
 
i
n
c
l
u
d
e
 
v
e
r
s
i
o
n
 
n
u
m
b
e
r
s
 
i
n
 
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
n
a
m
e
s
,
 
w
e
 
c
a
n
'
t
 
u
s
e
 
t
h
i
s
.
 
I
n
s
t
e
a
d
 
w
e
 
n
e
e
d
 
t
o
 
d
i
r
e
c
t
l
y
 
a
c
c
e
s
s
 
J
F
a
c
t
o
r
y
 
a
s
 
b
e
l
o
w

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
s
y
n
c
)

	
	
	
	
$
d
o
c
-
>
a
d
d
S
c
r
i
p
t
(
$
d
a
t
a
,
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
,
f
a
l
s
e
,
t
r
u
e
)
;

	
	
	
e
l
s
e

	
	
	
	
$
d
o
c
-
>
a
d
d
S
c
r
i
p
t
(
$
d
a
t
a
)
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
 
'
c
s
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
J
H
T
M
L
:
:
s
t
y
l
e
s
h
e
e
t
(
 
$
p
a
t
h
 
.
 
$
f
i
l
e
n
a
m
e
,
 
a
r
r
a
y
 
(
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
 
)
;
 
/
/
 
I
f
 
w
e
 
w
a
n
t
 
t
o
 
i
n
c
l
u
d
e
 
v
e
r
s
i
o
n
 
n
u
m
b
e
r
s
 
i
n
 
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
n
a
m
e
s
,
 
w
e
 
c
a
n
'
t
 
u
s
e
 
t
h
i
s
.
 
I
n
s
t
e
a
d
 
w
e
 
n
e
e
d
 
t
o
 
d
i
r
e
c
t
l
y
 
a
c
c
e
s
s
 
J
F
a
c
t
o
r
y
 
a
s
 
b
e
l
o
w

 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
c
-
>
a
d
d
S
t
y
l
e
S
h
e
e
t
(
$
d
a
t
a
)
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


 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

}


/
/
 
s
e
t
 
o
u
r
 
m
e
t
a
 
d
a
t
a

f
u
n
c
t
i
o
n
 
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
s
e
t
m
e
t
a
d
a
t
a
(
$
m
e
t
a
,
 
$
d
a
t
a
)

{

 
 
 
 
$
d
a
t
a
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
d
a
t
a
)
;

 
 
 
 
$
d
o
c
u
m
e
n
t
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
D
o
c
u
m
e
n
t
(
)
;

 
 
 
 
s
w
i
t
c
h
 
(
$
m
e
t
a
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
'
t
i
t
l
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
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
&
#
3
9
;
'
,
 
"
'
"
,
 
$
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
c
u
m
e
n
t
-
>
s
e
t
T
i
t
l
e
(
$
d
a
t
a
)
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
 
'
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
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
c
u
m
e
n
t
-
>
s
e
t
D
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
(
$
d
a
t
a
)
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
 
'
k
e
y
w
o
r
d
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
c
u
m
e
n
t
-
>
s
e
t
M
e
t
a
D
a
t
a
(
'
k
e
y
w
o
r
d
s
'
,
 
$
d
a
t
a
)
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
d
o
c
u
m
e
n
t
-
>
s
e
t
M
e
t
a
D
a
t
a
(
$
m
e
t
a
,
 
$
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
}

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
i
d
)

{

 
 
 
 
$
u
s
e
r
 
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
 
'
S
E
L
E
C
T
 
i
d
,
n
a
m
e
,
u
s
e
r
n
a
m
e
,
e
m
a
i
l
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
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
i
d
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
L
i
s
t
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
[
 
$
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
'
n
a
m
e
'
 
=
>
 
$
u
-
>
n
a
m
e
,
 
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
-
>
u
s
e
r
n
a
m
e
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
e
m
a
i
l
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
 
$
u
s
e
r
;

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
u
s
e
r
n
a
m
e
(
$
u
s
e
r
n
a
m
e
)

{

 
 
 
 
$
u
s
e
r
 
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
 
i
d
,
u
s
e
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
u
s
e
r
s
 
W
H
E
R
E
 
u
s
e
r
n
a
m
e
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
u
s
e
r
n
a
m
e
.
"
'
"
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
L
i
s
t
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
[
 
$
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
-
>
u
s
e
r
n
a
m
e
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
u
s
e
r
n
a
m
e
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
 
$
u
s
e
r
;

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
a
d
m
i
n
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
i
d
)

{

 
 
 
 
$
u
s
e
r
 
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
 
'
S
E
L
E
C
T
 
i
d
,
u
s
e
r
n
a
m
e
,
e
m
a
i
l
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
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
i
d
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
L
i
s
t
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
[
 
$
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
-
>
u
s
e
r
n
a
m
e
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
e
m
a
i
l
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
 
$
u
s
e
r
;

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
a
d
m
i
n
_
g
e
t
a
l
l
a
d
m
i
n
s
_
i
d
s
(
)

{

 
 
 
 
$
d
b
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
D
b
o
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
 
$
d
b
-
>
g
e
t
Q
u
e
r
y
(
t
r
u
e
)
;

 
 
 
 
$
q
u
e
r
y

 
 
 
 
 
 
 
 
-
>
s
e
l
e
c
t
(
$
d
b
-
>
q
u
o
t
e
N
a
m
e
(
a
r
r
a
y
(
'
a
.
i
d
'
,
 
'
a
.
u
s
e
r
n
a
m
e
'
,
 
'
a
.
e
m
a
i
l
'
)
)
)

 
 
 
 
 
 
 
 
-
>
f
r
o
m
(
$
d
b
-
>
q
u
o
t
e
N
a
m
e
(
'
#
_
_
u
s
e
r
s
'
,
 
'
a
'
)
)

 
 
 
 
 
 
 
 
-
>
j
o
i
n
(
'
L
E
F
T
'
,
 
$
d
b
-
>
q
u
o
t
e
N
a
m
e
(
'
#
_
_
u
s
e
r
_
u
s
e
r
g
r
o
u
p
_
m
a
p
'
,
 
'
b
'
)
.
'
 
O
N
 
(
'
.
$
d
b
-
>
q
u
o
t
e
N
a
m
e
(
'
a
.
i
d
'
)
.
'
 
=
 
'
.
$
d
b
-
>
q
u
o
t
e
N
a
m
e
(
'
b
.
u
s
e
r
_
i
d
'
)
.
'
)
'
)

 
 
 
 
 
 
 
 
-
>
w
h
e
r
e
(
$
d
b
-
>
q
u
o
t
e
N
a
m
e
(
'
b
.
g
r
o
u
p
_
i
d
'
)
.
'
=
8
'
)
;

 
 
 
 
/
/
 
N
u
m
b
e
r
 
8
 
r
e
p
r
e
s
e
n
t
 
I
D
 
o
f
 
a
 
"
g
r
o
u
p
_
i
d
"
 
f
r
o
m
 
"
_
u
s
e
r
_
u
s
e
r
g
r
o
u
p
_
m
a
p
"
 
t
a
b
l
e

 
 
 
 
$
d
b
-
>
s
e
t
Q
u
e
r
y
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
 
l
o
a
d
 
r
e
s
u
l
t
s
 
f
r
o
m
 
q
u
e
r
y

 
 
 
 
$
i
d
s
 
=
 
$
d
b
-
>
l
o
a
d
O
b
j
e
c
t
L
i
s
t
(
)
;


 
 
 
 
$
u
s
e
r
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
i
d
s
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
s
[
 
$
u
-
>
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
-
>
u
s
e
r
n
a
m
e
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
e
m
a
i
l
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
 
$
u
s
e
r
s
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
S
e
a
r
c
h
M
o
d
u
l
e
P
a
r
a
m
e
t
e
r
s
(
$
m
o
d
u
l
e
N
a
m
e
 
=
 
'
'
)

{

 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
m
o
d
u
l
e
N
a
m
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
m
o
d
u
l
e
N
a
m
e
 
=
=
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
g
e
t
I
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
M
o
d
u
l
e
V
a
l
s
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
 
p
a
r
a
m
s
 
F
R
O
M
 
#
_
_
m
o
d
u
l
e
s
 
W
H
E
R
E
 
m
o
d
u
l
e
 
=
 
'
$
m
o
d
u
l
e
N
a
m
e
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
 
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
v
a
l
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
r
r
 
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
p
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
a
r
r
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
a
r
r
 
a
s
 
$
s
t
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
 
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
:
'
,
 
$
s
t
r
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
 
=
 
$
d
a
t
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
$
d
a
t
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
k
e
y
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
 
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
"
'
,
 
'
'
,
 
$
k
e
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
 
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
{
'
,
 
'
'
,
 
$
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
 
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
}
'
,
 
'
'
,
 
$
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
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
"
'
,
 
'
'
,
 
$
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
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
{
'
,
 
'
'
,
 
$
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
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
}
'
,
 
'
'
,
 
$
v
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
$
k
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
v
a
l
s
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


/
/
 
R
e
t
u
r
n
s
 
a
n
 
i
n
d
e
x
e
d
 
a
r
r
a
y
 
o
f
 
t
h
e
 
C
M
S
'
s
 
u
s
e
r
s

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
U
s
e
r
s
(
$
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
 
0
)

{

 
 
 
 
$
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
u
s
e
r
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


 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
W
H
E
R
E
 
`
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
 
`
i
d
`
,
`
n
a
m
e
`
,
`
u
s
e
r
n
a
m
e
`
,
`
e
m
a
i
l
`
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
'
.
$
c
l
a
u
s
e
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
L
i
s
t
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
s
[
 
$
u
-
>
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
-
>
u
s
e
r
n
a
m
e
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
e
m
a
i
l
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
 
$
u
s
e
r
s
;

}


f
u
n
c
t
i
o
n
 
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
m
a
k
e
S
E
F
_
U
R
L
(
$
l
i
n
k
)

{

 
 
 
 
j
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
o
m
l
a
.
a
p
p
l
i
c
a
t
i
o
n
.
h
e
l
p
e
r
'
)
;

 
 
 
 
i
f
 
(
c
l
a
s
s
_
e
x
i
s
t
s
(
'
J
R
o
u
t
e
'
)
)
 
{

 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
J
R
o
u
t
e
:
:
_
(
$
l
i
n
k
,
 
$
x
h
t
m
l
 
=
 
t
r
u
e
)
;

 
 
 
 
}

 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
l
i
n
k
)
;


 
 
 
 
r
e
t
u
r
n
 
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
l
i
n
k
)
;

}


f
u
n
c
t
i
o
n
 
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
p
a
r
s
e
B
y
B
o
t
s
(
$
s
t
r
)

{

 
 
 
 
$
l
i
m
i
t
s
t
a
r
t
 
=
 
0
;

 
 
 
 
$
p
a
r
a
m
s
 
=
 
'
'
;

 
 
 
 
$
a
p
p
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
A
p
p
l
i
c
a
t
i
o
n
(
)
;

 
 
 
 
J
P
l
u
g
i
n
H
e
l
p
e
r
:
:
i
m
p
o
r
t
P
l
u
g
i
n
(
'
c
o
n
t
e
n
t
'
)
;

 
 
 
 
$
o
b
j
 
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
o
b
j
-
>
t
e
x
t
 
=
 
$
s
t
r
;

 
 
 
 
$
o
u
t
p
u
t
 
=
 
$
a
p
p
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
o
n
C
o
n
t
e
n
t
P
r
e
p
a
r
e
'
,
 
a
r
r
a
y
(
'
j
o
m
r
e
s
.
d
e
f
a
u
l
t
'
,
 
&
$
o
b
j
,
 
&
$
p
a
r
a
m
s
,
 
$
l
i
m
i
t
s
t
a
r
t
)
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
 
$
o
b
j
-
>
t
e
x
t
;


 
 
 
 
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

}


f
u
n
c
t
i
o
n
 
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
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
s
t
r
)

{

 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
C
o
n
f
i
g
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
f
i
g
-
>
g
e
t
(
'
u
n
i
c
o
d
e
s
l
u
g
s
'
)
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
r
 
=
 
J
F
i
l
t
e
r
O
u
t
p
u
t
:
:
s
t
r
i
n
g
U
R
L
U
n
i
c
o
d
e
S
l
u
g
(
$
s
t
r
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
r
 
=
 
J
F
i
l
t
e
r
O
u
t
p
u
t
:
:
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
s
t
r
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
t
r
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
 
n
u
l
l
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
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
d
d
c
u
s
t
o
m
t
a
g
(
$
d
a
t
a
)

{

 
 
 
 
$
d
o
c
u
m
e
n
t
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
D
o
c
u
m
e
n
t
(
)
;

 
 
 
 
$
d
o
c
u
m
e
n
t
-
>
a
d
d
C
u
s
t
o
m
T
a
g
(
$
d
a
t
a
)
;

}


f
u
n
c
t
i
o
n
 
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
c
u
r
r
e
n
t
u
r
l
(
)

{

 
 
 
 
r
e
t
u
r
n
 
J
U
R
I
:
:
c
u
r
r
e
n
t
(
)
;

}


f
u
n
c
t
i
o
n
 
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
p
a
t
c
h
J
o
o
m
l
a
T
e
m
p
l
a
t
e
(
$
f
o
r
c
e
 
=
 
f
a
l
s
e
)

{

 
 
 
 
$
a
p
p
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
A
p
p
l
i
c
a
t
i
o
n
(
)
;

 
 
 
 
$
t
e
m
p
l
a
t
e
N
a
m
e
 
=
 
$
a
p
p
-
>
g
e
t
T
e
m
p
l
a
t
e
(
'
t
e
m
p
l
a
t
e
'
)
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
;

 
 
 
 
$
t
m
p
l
c
o
m
p
o
n
e
n
t
 
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
t
m
p
l
c
o
m
p
o
n
e
n
t
'
)
;

 
 
 
 
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
 
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
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
'
)
;


 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
(
$
f
o
r
c
e
 
|
|
 
!
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
c
o
p
y
(
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
,
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
"
>
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
'
.
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
.
'
 
t
o
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
 
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
,
 
p
l
e
a
s
e
 
d
o
 
t
h
i
s
 
m
a
n
u
a
l
l
y
 
t
h
r
o
u
g
h
 
F
T
P
<
/
p
>
<
b
r
/
>
'
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
 
e
l
s
e
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
m
t
i
m
e
(
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
)
 
>
 
f
i
l
e
m
t
i
m
e
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
c
o
p
y
(
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
,
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
"
>
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
'
.
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
.
'
 
t
o
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
a
d
m
i
n
i
s
t
r
a
t
o
r
'
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
 
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
,
 
p
l
e
a
s
e
 
d
o
 
t
h
i
s
 
m
a
n
u
a
l
l
y
 
t
h
r
o
u
g
h
 
F
T
P
<
/
p
>
<
b
r
/
>
'
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
f
o
r
c
e
 
|
|
 
!
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
c
o
p
y
(
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
,
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
"
>
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
'
.
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
.
'
 
t
o
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
 
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
,
 
p
l
e
a
s
e
 
d
o
 
t
h
i
s
 
m
a
n
u
a
l
l
y
 
t
h
r
o
u
g
h
 
F
T
P
<
/
p
>
<
b
r
/
>
'
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
 
e
l
s
e
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
m
t
i
m
e
(
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
)
 
>
 
f
i
l
e
m
t
i
m
e
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
c
o
p
y
(
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
,
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
"
>
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
'
.
$
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
.
'
 
t
o
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
$
t
m
p
l
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
'
.
p
h
p
 
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
,
 
p
l
e
a
s
e
 
d
o
 
t
h
i
s
 
m
a
n
u
a
l
l
y
 
t
h
r
o
u
g
h
 
F
T
P
<
/
p
>
<
b
r
/
>
'
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
 
G
e
t
 
t
h
e
 
c
m
s
 
l
a
n
g
u
a
g
e

f
u
n
c
t
i
o
n
 
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
g
e
t
c
m
s
l
a
n
g
(
)

{

 
 
 
 
r
e
t
u
r
n
 
J
F
a
c
t
o
r
y
:
:
g
e
t
L
a
n
g
u
a
g
e
(
)
-
>
g
e
t
T
a
g
(
)
;

}


/
/
 
R
e
t
u
r
n
s
 
a
n
 
i
n
d
e
x
e
d
 
a
r
r
a
y
 
o
f
 
t
h
e
 
C
M
S
'
s
 
u
s
e
r
s
 
w
h
e
r
e
 
u
s
e
r
n
a
m
e
 
m
a
t
c
h
e
s
 
a
 
s
e
a
r
c
h
e
d
 
s
t
r
i
n
g

f
u
n
c
t
i
o
n
 
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
f
i
n
d
_
c
m
s
_
u
s
e
r
s
(
$
s
e
a
r
c
h
_
t
e
r
m
 
=
 
'
'
)

{

 
 
 
 
$
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
u
s
e
r
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


 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
_
t
e
r
m
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
"
W
H
E
R
E
 
L
O
W
E
R
(
`
u
s
e
r
n
a
m
e
`
)
 
L
I
K
E
 
'
%
"
.
m
b
_
s
t
r
t
o
l
o
w
e
r
(
$
s
e
a
r
c
h
_
t
e
r
m
)
.
"
%
'
"
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
 
`
i
d
`
,
 
`
n
a
m
e
`
,
 
`
u
s
e
r
n
a
m
e
`
,
 
`
e
m
a
i
l
`
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
'
.
$
c
l
a
u
s
e
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
L
i
s
t
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
s
[
 
$
u
-
>
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
-
>
u
s
e
r
n
a
m
e
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
e
m
a
i
l
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
 
$
u
s
e
r
s
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
U
s
e
r
n
a
m
e
(
$
u
s
e
r
_
i
d
 
=
 
0
)
 
{

	
i
f
 
(
$
u
s
e
r
_
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
u
s
e
r
n
a
m
e
`
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
`
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
u
s
e
r
_
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
,
1
)
;

	

	
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
C
m
s
U
s
e
r
P
r
o
f
i
l
e
L
i
n
k
(
$
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
 
0
)
 
{

	
i
f
 
(
$
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
 
'
#
'
;

	
}

	

	
$
u
r
l
 
=
 
J
U
R
I
:
:
b
a
s
e
(
)
.
'
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
u
s
e
r
s
&
v
i
e
w
=
u
s
e
r
&
l
a
y
o
u
t
=
e
d
i
t
&
i
d
=
'
.
$
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
;

	

	
r
e
t
u
r
n
 
$
u
r
l
;

}


f
u
n
c
t
i
o
n
 
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
i
s
R
t
l
(
$
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
 
0
)
 
{

	
$
l
a
n
g
u
a
g
e
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
L
a
n
g
u
a
g
e
(
)
;

	
$
i
s
R
t
l
 
=
 
$
l
a
n
g
u
a
g
e
-
>
i
s
R
t
l
(
)
;

	

	
r
e
t
u
r
n
 
$
i
s
R
t
l
;

}


f
u
n
c
t
i
o
n
 
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
u
s
e
r
_
i
s
_
a
d
m
i
n
(
)
 
{

	
$
u
s
e
r
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
U
s
e
r
(
)
;

	

	
i
f
 
(
 
$
u
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
(
'
c
o
r
e
.
a
d
m
i
n
'
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

