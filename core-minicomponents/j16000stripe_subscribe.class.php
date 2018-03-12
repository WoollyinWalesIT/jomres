
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
1
6
0
0
0
s
t
r
i
p
e
_
s
u
b
s
c
r
i
b
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
,
 
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
b
l
o
c
k
u
i
-
n
p
m
/
'
,
 
'
j
q
u
e
r
y
.
b
l
o
c
k
U
I
.
j
s
'
)
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
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
'
)
;

	
	
$
k
e
y
_
v
a
l
i
d
a
t
i
o
n
 
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
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
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
D
M
I
N
.
'
&
t
a
s
k
=
s
t
r
i
p
e
_
s
u
b
s
c
r
i
b
e
'
)
;


	
	
i
f
 
(
!
$
k
e
y
_
v
a
l
i
d
a
t
i
o
n
-
>
k
e
y
_
v
a
l
i
d
)
 
{

	
	
	
t
r
y
 
{

	
	
	
	
$
c
a
c
h
e
f
i
l
e
 
=
 
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
.
'
j
o
m
r
e
s
_
s
h
o
p
_
c
o
u
n
t
r
i
e
s
.
j
s
o
n
'
;

	
	
	
	
i
f
 
(
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
$
c
a
c
h
e
f
i
l
e
)
)
 
{

	
	
	
	
	
$
b
a
s
e
_
u
r
i
 
=
 
'
h
t
t
p
s
:
/
/
l
i
c
e
n
s
e
-
s
e
r
v
e
r
.
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
/
'
;

	
	
	
	
	
$
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
'
s
h
o
p
/
c
o
u
n
t
r
i
e
s
.
p
h
p
'
;

	
	
	
	
	

	
	
	
	
	
/
/
 
M
a
n
y
 
u
s
e
r
s
 
w
i
l
l
 
b
e
 
i
n
s
t
a
l
l
i
n
g
 
o
n
 
l
o
c
a
l
h
o
s
t
 
e
t
c
,
 
w
h
e
r
e
 
s
e
l
f
s
i
g
n
e
d
 
c
e
r
t
i
f
i
c
a
t
e
s
 
m
a
y
 
n
o
t
 
b
e
 
s
e
t
 
u
p
 
c
o
r
r
e
c
t
l
y
,
 
t
h
e
r
e
f
o
r
e
 
w
e
 
w
i
l
l
 
d
i
s
a
b
l
e
 
v
e
r
i
f
i
c
a
t
i
o
n
 
o
f
 
c
e
r
t
s

	
	
	
	
	
$
c
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
(
[

	
	
	
	
	
	
'
b
a
s
e
_
u
r
i
'
 
=
>
 
$
b
a
s
e
_
u
r
i
,

	
	
	
	
	
	
'
v
e
r
i
f
y
'
 
=
>
 
f
a
l
s
e

	
	
	
	
	
]
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
'
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
b
a
s
e
_
u
r
i
.
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
'
G
u
z
z
l
e
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

	
	
	
	
	

	
	
	
	
	
$
c
o
u
n
t
r
i
e
s
_
r
e
s
p
o
n
s
e
 
=
 
$
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
q
u
e
r
y
_
s
t
r
i
n
g
)
-
>
g
e
t
B
o
d
y
(
)
-
>
g
e
t
C
o
n
t
e
n
t
s
(
)
;

	
	
	
	
	
$
c
o
u
n
t
r
i
e
s
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
$
c
o
u
n
t
r
i
e
s
_
r
e
s
p
o
n
s
e
)
;


	
	
	
	
	
i
f
 
(
!
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
c
o
u
n
t
r
i
e
s
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
C
o
u
l
d
 
n
o
t
 
g
e
t
 
l
i
s
t
 
o
f
 
c
o
u
n
t
r
i
e
s
'
)
;

	
	
	
	
	
}

	
	
	
	
	
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
$
c
a
c
h
e
f
i
l
e
 
,
 
$
c
o
u
n
t
r
i
e
s
_
r
e
s
p
o
n
s
e
 
)
;

	
	
	
	

	
	
	
	

	
	
	
	
}

	
	
	
	
$
c
o
u
n
t
r
i
e
s
_
r
e
s
p
o
n
s
e
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
c
a
c
h
e
f
i
l
e
)
;

	
	
	
}

	
	
	
c
a
t
c
h
 
(
C
l
i
e
n
t
E
r
r
o
r
R
e
s
p
o
n
s
e
E
x
c
e
p
t
i
o
n
 
$
e
x
c
e
p
t
i
o
n
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
_
f
e
e
d
b
a
c
k
 
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
_
f
e
e
d
b
a
c
k
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
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
'
C
o
u
l
d
 
n
o
t
 
g
e
t
 
c
o
u
n
t
r
i
e
s
 
l
i
s
t
'
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
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
'
)
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
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
$
e
x
c
e
p
t
i
o
n
-
>
g
e
t
R
e
s
p
o
n
s
e
(
)
-
>
g
e
t
B
o
d
y
(
t
r
u
e
)
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
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
'
)
)
;

	
	
	
}


	
	
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

	
	

	
	
$
o
u
t
p
u
t
[
'
C
O
U
N
T
R
I
E
S
'
]
 
=
 
$
c
o
u
n
t
r
i
e
s
_
r
e
s
p
o
n
s
e
;

	
	
$
o
u
t
p
u
t
[
'
A
D
M
I
N
_
E
M
A
I
L
'
]
 
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
[
]
 
=
 
$
o
u
t
p
u
t
;

	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
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
)
;

	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
s
t
r
i
p
e
_
s
u
b
s
c
r
i
b
e
.
h
t
m
l
'
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
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
'
,
 
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
)
;

	
	
$
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
_
f
o
r
m
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
[
'
S
U
B
S
C
R
I
P
T
I
O
N
_
F
O
R
M
_
U
S
E
R
_
D
E
T
A
I
L
S
'
]
 
=
 
$
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
_
f
o
r
m
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
[
]
 
=
 
$
o
u
t
p
u
t
;

	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
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
)
;

	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
s
t
r
i
p
e
_
s
u
b
s
c
r
i
b
e
_
w
r
a
p
p
e
r
.
h
t
m
l
'
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
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
'
,
 
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
)
;

	
	
e
c
h
o
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
[
]
 
=
 
$
o
u
t
p
u
t
;

	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
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
)
;

	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
s
t
r
i
p
e
_
s
u
b
s
c
r
i
b
e
d
.
h
t
m
l
'
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
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
'
,
 
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
)
;

	
	
e
c
h
o
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
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

