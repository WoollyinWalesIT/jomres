
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
3
0
2
5
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
_
i
n
v
o
i
c
e

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

 
 
 
 
{

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
r
e
s
u
l
t
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
i
s
s
e
t
(
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
)
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
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
 
=
 
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
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
'
 
]
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
t
m
p
b
o
o
k
i
n
g
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
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
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
a
r
r
i
v
a
l
D
a
t
e
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
r
r
i
v
a
l
D
a
t
e
'
)
;

 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
)
;

 
 
 
 
 
 
 
 
$
s
t
a
y
D
a
y
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
s
t
a
y
D
a
y
s
'
)
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
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
'
)
;

 
 
 
 
 
 
 
 
$
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
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
'
)
;

 
 
 
 
 
 
 
 
$
e
x
t
r
a
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
e
x
t
r
a
s
'
)
;

 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
'
)
;

	
	
$
r
o
o
m
_
t
o
t
a
l
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
r
o
o
m
_
t
o
t
a
l
'
)
;

 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
)
;

 
 
 
 
 
 
 
 
$
t
a
x
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
t
a
x
'
)
;

 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
d
i
s
c
o
u
n
t
s
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
o
u
r
c
e
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
r
e
s
o
u
r
c
e
'
)
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
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
)
;

 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
)
;

 
 
 
 
 
 
 
 
$
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
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
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
'
]
 
=
=
 
'
d
a
t
a
b
a
s
e
'
)
 
{

	
	
	
$
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
s
_
i
t
e
m
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
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
s
_
i
t
e
m
s
'
)
;

	
	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
)
;

	
	
	
$
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
)
;

	
	
	
$
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
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
s
_
i
t
e
m
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
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
s
_
i
t
e
m
s
'
)
)
;

	
	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
)
)
;

	
	
	
$
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
)
)
;

	
	
	
$
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
)
)
;

	
	
}


 
 
 
 
 
 
 
 
/
/
w
e
`
l
l
 
n
e
e
d
 
t
h
i
s
 
i
f
 
w
i
s
e
 
p
r
i
c
e
 
i
s
 
e
n
a
b
l
e
d
 
a
n
d
 
w
e
 
c
h
a
r
g
e
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t

 
 
 
 
 
 
 
 
$
g
u
e
s
t
s
_
b
y
_
r
o
o
m
 
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
g
u
e
s
t
s
_
b
y
_
r
o
o
m
_
a
r
r
a
y
_
i
n
d
e
x
 
=
 
0
;

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
!
=
 
'
'
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
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
a
s
 
$
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
k
[
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
s
_
b
y
_
r
o
o
m
[
]
 
=
 
$
k
[
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
o
u
r
c
e
 
=
=
 
'
1
'
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
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
n
e
w
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
 
0
.
0
0
;

 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
&
&
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
!
=
 
0
 
&
&
 
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
n
e
w
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
 
(
f
l
o
a
t
)
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
o
v
e
r
r
i
d
e
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
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
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
n
e
w
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
=
 
0
.
0
0
)
 
{
 
/
/
c
o
n
t
r
a
c
t
 
t
o
t
a
l
 
i
s
 
n
o
t
 
o
v
e
r
r
i
d
d
e
n

 
 
 
 
 
 
 
 
 
 
 
 
/
/
A
c
c
o
m
m
o
d
a
t
i
o
n
 
l
i
n
e
 
i
t
e
m


 
 
 
 
 
 
 
 
 
 
 
 
/
/
G
e
t
 
t
h
e
 
i
n
i
t
i
a
l
 
d
i
s
c
o
u
n
t
 
(
w
i
s
e
p
r
i
c
e
,
 
l
a
s
t
m
i
n
u
t
e
,
 
p
e
r
s
o
n
a
l
,
 
p
a
r
t
n
e
r
,
 
c
o
u
p
o
n
 
d
i
s
c
o
u
n
t
s
)

 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
/
/
d
i
s
c
o
u
n
t
 
a
m
o
u
n
t
s

	
	
	
$
l
a
s
t
m
i
n
u
t
e
_
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
	
$
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
	
$
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
	
$
t
o
u
r
_
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
	
$
p
a
r
t
n
e
r
_
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
	
$
p
e
r
s
o
n
a
l
_
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
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
d
i
s
c
o
u
n
t
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
d
i
s
c
o
u
n
t
s
 
a
s
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
 
=
 
(
f
l
o
a
t
)
 
$
d
[
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
]
 
-
 
(
f
l
o
a
t
)
 
$
d
[
 
'
d
i
s
c
o
u
n
t
t
o
'
 
]
;


	
	
	
	
	
s
w
i
t
c
h
 
(
$
d
[
'
t
y
p
e
'
]
)
 
{

	
	
	
	
	
	
c
a
s
e
 
'
M
R
P
'
:
 
/
/
w
i
s
e
p
r
i
c
e

	
	
	
	
	
	
	
i
f
 
(
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
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
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
(
i
n
t
)
 
$
g
u
e
s
t
s
_
b
y
_
r
o
o
m
[
$
g
u
e
s
t
s
_
b
y
_
r
o
o
m
_
a
r
r
a
y
_
i
n
d
e
x
]
 
>
 
0
)
 
{

	
	
	
	
	
	
	
	
	
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
 
*
 
(
i
n
t
)
 
$
g
u
e
s
t
s
_
b
y
_
r
o
o
m
[
$
g
u
e
s
t
s
_
b
y
_
r
o
o
m
_
a
r
r
a
y
_
i
n
d
e
x
]
;

	
	
	
	
	
	
	
	
	
+
+
$
g
u
e
s
t
s
_
b
y
_
r
o
o
m
_
a
r
r
a
y
_
i
n
d
e
x
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}


	
	
	
	
	
	
	
$
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
 
+
=
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
 
*
 
$
s
t
a
y
D
a
y
s
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
S
R
P
'
:

	
	
	
	
	
	
	
$
l
a
s
t
m
i
n
u
t
e
_
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
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
C
o
u
p
o
n
'
:

	
	
	
	
	
	
	
$
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
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
T
o
u
r
C
o
u
p
o
n
'
:

	
	
	
	
	
	
	
$
t
o
u
r
_
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
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
P
a
r
t
n
e
r
'
:

	
	
	
	
	
	
	
$
p
a
r
t
n
e
r
_
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
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
P
e
r
s
o
n
a
l
'
:

	
	
	
	
	
	
	
$
p
e
r
s
o
n
a
l
_
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
_
a
m
o
u
n
t
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
i
n
c
l
u
d
e
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
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
_
T
O
T
A
L
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
(
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
a
r
r
i
v
a
l
D
a
t
e
)
.
'
 
-
 
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
d
e
p
a
r
t
u
r
e
D
a
t
e
)
.
'
)
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
$
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
 
-
 
$
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
 
-
 
$
l
a
s
t
m
i
n
u
t
e
_
d
i
s
c
o
u
n
t
 
-
 
$
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
 
-
 
$
p
a
r
t
n
e
r
_
d
i
s
c
o
u
n
t
 
-
 
$
p
e
r
s
o
n
a
l
_
d
i
s
c
o
u
n
t
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
D
e
p
o
s
i
t
 
l
i
n
e
 
i
t
e
m

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
)
 
{

	
	
	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
 
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
"
g
a
t
e
w
a
y
_
p
a
y
m
e
n
t
_
m
e
t
h
o
d
"
)
;

	
	
	
	
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
 
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
"
g
a
t
e
w
a
y
_
m
a
n
a
g
e
m
e
n
t
_
u
r
l
"
)
;

	
	
	
	
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
 
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
"
g
a
t
e
w
a
y
_
t
r
a
n
s
a
c
t
i
o
n
_
i
d
"
)
;


	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
)
)

	
	
	
	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
 
=
 
'
'
;

	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
)
)

	
	
	
	
	
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
 
=
 
'
'
;

	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
)
)

	
	
	
	
	
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
 
=
 
'
'
;

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
0
 
-
 
$
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
s
_
p
a
y
m
e
n
t
'
 
=
>
 
1
,

	
	
	
	
	
	
	
	
	
 
 
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
=
>
 
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
,

	
	
	
	
	
	
	
	
	
 
 
 
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
=
>
 
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
,

	
	
	
	
	
	
	
	
	
 
 
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
=
>
 
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
D
i
s
c
o
u
n
t
 
l
i
n
e
 
i
t
e
m
s

 
 
 
 
 
 
 
 
 
 
 
 
/
*
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
d
i
s
c
o
u
n
t
s
 
)
 
>
 
0
 
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
d
i
s
c
o
u
n
t
s
 
a
s
 
$
d
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
t
a
l
D
i
s
c
o
u
n
t
F
o
r
R
o
o
m
 
=
 
(
f
l
o
a
t
)
 
$
d
[
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
]
 
-
 
(
f
l
o
a
t
)
 
$
d
[
 
'
d
i
s
c
o
u
n
t
t
o
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
D
I
S
C
O
U
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
D
I
S
C
O
U
N
T
'
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
"
-
"
 
.
 
$
t
o
t
a
l
D
i
s
c
o
u
n
t
F
o
r
R
o
o
m
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
"
1
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
"
0
"

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
*
/


 
 
 
 
 
 
 
 
 
 
 
 
/
/
S
i
n
g
l
e
 
P
e
r
s
o
n
 
S
u
p
p
l
e
m
e
n
t
 
l
i
n
e
 
i
t
e
m

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
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
_
C
O
S
T
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
E
x
t
r
a
s
 
a
n
d
 
E
x
t
r
a
s
 
t
a
x
e
s

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
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
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
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
e
x
t
r
a
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
,
t
a
x
_
r
a
t
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
m
o
d
e
l
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
c
o
m
p
_
e
x
t
r
a
s
m
o
d
e
l
s
_
m
o
d
e
l
s
 
W
H
E
R
E
 
e
x
t
r
a
_
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
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
 
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
m
o
d
e
l
 
!
=
 
'
1
0
0
'
)
 
{
 
/
/
 
M
o
d
e
l
 
1
0
 
i
s
 
f
o
r
 
c
o
m
m
i
s
s
i
o
n

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
 
=
 
(
f
l
o
a
t
)
 
$
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
s
_
i
t
e
m
s
[
 
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
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
n
t
 
=
 
$
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
[
 
$
e
x
t
r
a
U
i
d
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
n
t
i
t
i
e
s
 
=
 
$
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
 
*
 
$
q
u
a
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
r
i
c
e
 
=
 
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
a
n
t
i
t
i
e
s
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
r
i
c
e
 
=
 
(
$
r
o
o
m
_
t
o
t
a
l
 
/
 
1
0
0
)
 
*
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
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
e
E
x
t
r
a
s
-
>
t
a
x
_
r
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
i
s
o
r
 
=
 
(
$
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
t
t
_
p
r
i
c
e
 
=
 
$
e
x
t
r
a
_
p
r
i
c
e
 
/
 
$
d
i
v
i
s
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
r
i
c
e
 
=
 
$
n
e
t
t
_
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
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
t
a
x
_
r
a
t
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
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
E
X
T
R
A
N
A
M
E
'
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
e
x
t
r
a
U
i
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
$
e
x
t
r
a
_
p
r
i
c
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
$
q
u
a
n
t
i
t
i
e
s
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
3
r
d
 
p
a
r
t
y
 
e
x
t
r
a
s
 
l
i
k
e
 
J
i
n
t
o
u
r
 
t
o
u
r
s

 
 
 
 
 
 
 
 
 
 
 
 
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
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
 
&
&
 
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
!
=
=
 
f
a
l
s
e
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
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
a
s
 
$
p
l
u
g
i
n
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
p
l
u
g
i
n
 
a
s
 
$
t
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
p
e
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
p
e
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	
	
	

	
	
	
	
	
	
/
/
s
t
r
a
n
g
e
 
a
r
r
a
y
 
k
e
y
 
n
a
m
e
.
.
w
e
 
n
e
e
d
 
t
o
 
g
e
t
 
t
h
e
 
p
r
i
c
e
 
w
i
t
h
o
u
t
 
t
a
x
 
n
o
 
m
a
t
t
e
r
 
w
h
a
t

	
	
	
	
	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
_
p
r
i
c
e
 
=
 
$
t
p
e
[
 
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
 
]
;

	
	
	
	
	
	
$
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
n
e
t
t
 
=
 
$
t
o
u
r
_
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
;

	
	
	
	
	
	

	
	
	
	
	
	
i
f
 
(
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
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
p
e
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
)
)
 
{

	
	
	
	
	
	
	
$
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
r
a
t
e
;

	
	
	
	
	
	
	
$
d
i
v
i
s
o
r
 
=
 
(
$
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

	
	
	
	
	
	
	
$
n
e
t
t
_
p
r
i
c
e
 
=
 
$
t
p
e
[
 
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
 
]
 
/
 
$
d
i
v
i
s
o
r
;

	
	
	
	
	
	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
_
p
r
i
c
e
 
=
 
$
n
e
t
t
_
p
r
i
c
e
;

	
	
	
	
	
	
	

	
	
	
	
	
	
	
/
/
f
i
n
d
 
t
h
e
 
n
e
t
t
 
c
o
u
p
o
n
 
d
i
s
c
o
u
n
t

	
	
	
	
	
	
	
$
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
n
e
t
t
 
=
 
$
t
o
u
r
_
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
 
/
 
$
d
i
v
i
s
o
r
;

	
	
	
	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
$
t
p
e
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
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
t
p
e
[
 
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
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
_
p
r
i
c
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
 
-
 
$
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
n
e
t
t
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
A
d
d
i
t
i
o
n
a
l
 
l
i
n
e
 
i
t
e
m
s
 
c
r
e
a
t
e
d
 
b
y
 
o
t
h
e
r
 
p
l
u
g
i
n
s

 
 
 
 
 
 
 
 
 
 
 
 
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
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
)
 
&
&
 
$
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
 
!
=
=
 
f
a
l
s
e
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
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
 
a
s
 
$
p
l
u
g
i
n
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
p
l
u
g
i
n
 
a
s
 
$
t
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
p
e
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
p
e
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
$
t
p
e
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
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
t
p
e
[
 
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
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
$
t
p
e
[
 
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
c
o
n
t
r
a
c
t
 
t
o
t
a
l
 
i
s
 
o
v
e
r
r
i
d
d
e
n
 
b
y
 
t
h
e
 
m
a
n
a
g
e
r

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
e
w
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
,
 
2
,
 
'
.
'
,
 
'
'
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
a
m
e
n
d
i
n
g
 
t
h
e
 
i
n
v
o
i
c
e

 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
&
&
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
!
=
 
0
 
&
&
 
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
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
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
_
i
d
 
=
 
(
i
n
t
)
 
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
,
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
,
t
a
x
_
c
o
d
e
,
s
e
r
v
i
c
e
_
q
t
y
 
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
e
r
v
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
u
i
d
 
=
 
'
.
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
.
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
s
e
r
v
i
c
e
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
_
s
e
r
v
i
c
e
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
e
x
t
r
a
_
s
e
r
v
i
c
e
s
 
a
s
 
$
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
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
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
(
i
n
t
)
 
$
e
s
-
>
t
a
x
_
c
o
d
e
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
e
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
e
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
,
 
2
,
 
'
.
'
,
 
'
'
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
e
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
q
t
y
,
 
2
,
 
'
.
'
,
 
'
'
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
_
d
a
t
a
 
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
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
i
d
'
 
]
 
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
u
p
d
a
t
e
_
i
n
v
o
i
c
e
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
d
a
t
a
,
 
$
l
i
n
e
_
i
t
e
m
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
r
e
s
u
l
t
s
 
=
 
a
r
r
a
y
(
'
i
n
v
o
i
c
e
_
i
d
'
 
=
>
 
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
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
i
n
v
o
i
c
e

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
 
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
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
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
'
 
]
 
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
t
m
p
g
u
e
s
t
[
 
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
 
]
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
d
a
t
a
[
 
'
s
u
b
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
 
]
 
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
G
l
o
b
a
l
C
u
r
r
e
n
c
y
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
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
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
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
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
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
i
n
v
o
i
c
e
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
r
e
a
t
e
_
n
e
w
_
i
n
v
o
i
c
e
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
d
a
t
a
,
 
$
l
i
n
e
_
i
t
e
m
s
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
 
'
.
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
.
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
,
 
'
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
D
e
p
o
s
i
t
 
l
i
n
e
 
i
t
e
m

	
	
	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
 
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
"
g
a
t
e
w
a
y
_
p
a
y
m
e
n
t
_
m
e
t
h
o
d
"
)
;

	
	
	
	
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
 
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
"
g
a
t
e
w
a
y
_
m
a
n
a
g
e
m
e
n
t
_
u
r
l
"
)
;

	
	
	
	
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
 
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
"
g
a
t
e
w
a
y
_
t
r
a
n
s
a
c
t
i
o
n
_
i
d
"
)
;

	
	
	
	

	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
)
)

	
	
	
	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
 
=
 
'
'
;

	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
)
)

	
	
	
	
	
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
 
=
 
'
'
;

	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
)
)

	
	
	
	
	
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
 
=
 
'
'
;

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
_
l
i
n
e
_
i
t
e
m
_
d
a
t
a
 
=
 
a
r
r
a
y
(
'
t
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
0
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
n
a
m
e
'
 
=
>
 
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
 
=
>
 
'
'
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
0
 
-
 
$
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
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
=
>
 
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
=
>
 
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
=
>
 
$
t
r
a
n
s
a
c
t
i
o
n
_
i
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
 
(
i
n
t
)
 
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
a
d
d
_
l
i
n
e
_
i
t
e
m
(
$
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
_
l
i
n
e
_
i
t
e
m
_
d
a
t
a
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
c
o
m
m
i
t
U
p
d
a
t
e
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
i
n
s
e
r
t
e
d
_
b
o
o
k
i
n
g
_
i
n
v
o
i
c
e
_
i
d
'
,
 
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
i
n
i
t
_
t
o
t
a
l
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
(
f
l
o
a
t
)
 
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
n
i
t
_
t
o
t
a
l
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
M
a
r
k
 
i
n
v
o
i
c
e
 
p
e
n
d
i
n
g
 
o
r
 
p
a
i
d

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
 
&
&
 
$
t
m
p
_
i
n
i
t
_
t
o
t
a
l
 
=
=
 
0
.
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
p
a
i
d
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
p
e
n
d
i
n
g
(
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
r
e
s
u
l
t
s
 
=
 
a
r
r
a
y
(
'
i
n
v
o
i
c
e
_
i
d
'
 
=
>
 
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
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
s
u
l
t
s
;

 
 
 
 
}

}

