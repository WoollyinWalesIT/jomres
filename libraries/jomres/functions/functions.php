
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
*
*

 
*
 
F
i
n
d
 
t
h
e
 
r
e
l
a
t
i
v
e
 
p
a
t
h
 
t
o
 
a
 
Q
R
 
c
o
d
e

 
*
/

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
q
r
_
c
o
d
e
_
r
e
l
P
a
t
h
(
$
a
r
g
)
 

{

	
$
r
e
s
u
l
t
 
=
 
j
o
m
r
e
s
_
m
a
k
e
_
q
r
_
c
o
d
e
 
(
$
a
r
g
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
[
'
r
e
l
a
t
i
v
e
_
p
a
t
h
'
]
;

}


/
*
*

 
*
 
A
n
 
e
a
s
y
 
w
a
y
 
t
o
 
q
u
i
c
k
l
y
 
r
e
t
r
i
e
v
e
 
a
 
s
i
n
g
l
e
t
o
n

 
*
/

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
g
e
t
S
i
n
g
l
e
t
o
n
(
$
c
l
a
s
s
,
 
$
a
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
$
c
l
a
s
s
,
 
$
a
r
g
s
)
;

}


/
*

A
 
f
u
n
c
t
i
o
n
 
t
h
a
t
 
m
a
k
e
s
 
a
n
 
a
s
y
n
c
 
P
O
S
T
 
o
r
 
G
E
T
 
r
e
q
u
e
s
t
 
u
s
i
n
g
 
s
o
c
k
e
t
s

*
/


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
a
s
y
n
c
_
r
e
q
u
e
s
t
(
$
t
y
p
e
 
=
 
"
G
E
T
"
,
 
$
u
r
l
 
=
 
"
"
,
 
$
p
o
r
t
 
=
 
'
'
,
 
$
p
o
s
t
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
)

{

	
$
p
o
s
t
_
s
t
r
i
n
g
 
=
 
"
"
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
 
u
r
l
 
i
s
 
e
m
p
t
y

	
i
f
 
(
$
u
r
l
 
=
=
 
"
"
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
i
f
 
t
h
i
s
 
i
s
 
a
 
P
O
S
T
,
 
t
h
e
n
 
w
e
 
m
u
s
t
 
h
a
v
e
 
s
o
m
e
 
p
o
s
t
 
d
a
t
a
 
i
n
 
t
h
e
 
a
r
r
a
y

	
i
f
 
(
$
t
y
p
e
 
=
=
 
"
P
O
S
T
"
 
&
&
 
e
m
p
t
y
(
$
p
o
s
t
_
d
a
t
a
)
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
n
e
r
a
t
e
 
t
h
e
 
p
o
s
t
 
s
t
r
i
n
g

	
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
p
o
s
t
_
d
a
t
a
)
)
 
{

	
	
$
p
o
s
t
_
s
t
r
i
n
g
 
=
 
h
t
t
p
_
b
u
i
l
d
_
q
u
e
r
y
(
$
p
o
s
t
_
d
a
t
a
)
;

	
}

	

	
/
/
s
e
t
 
t
h
e
 
p
o
r
t
 
d
e
p
e
n
d
i
n
g
 
o
n
 
h
t
t
p
/
h
t
t
p
s
 
i
f
 
n
o
 
s
p
e
c
i
f
i
c
 
v
a
l
u
e
 
i
s
 
p
a
s
s
e
d

	
i
f
 
(
(
i
n
t
)
$
p
o
r
t
 
=
=
 
0
)
 
{

	
	
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
u
r
l
,
 
'
h
t
t
p
s
:
/
/
'
)
 
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

	
	
	
$
p
o
r
t
 
=
 
4
4
3
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
p
o
r
t
 
=
 
8
0
;

	
	
}

	
}
 
e
l
s
e
 
{

	
	
$
p
o
r
t
 
=
 
(
i
n
t
)
$
p
o
r
t
;

	
}

	

	
$
p
a
r
t
s
 
=
 
p
a
r
s
e
_
u
r
l
(
$
u
r
l
)
;

	

	
/
/
g
e
t
 
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
s
 
d
i
s
a
b
l
e
d
 
i
n
 
p
h
p
.
i
n
i

	
$
d
i
s
a
b
l
e
d
_
f
u
n
c
t
i
o
n
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
,
'
,
 
@
i
n
i
_
g
e
t
(
'
d
i
s
a
b
l
e
_
f
u
n
c
t
i
o
n
s
'
)
)
;


	
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
f
s
o
c
k
o
p
e
n
'
)
 
&
&
 
!
i
n
_
a
r
r
a
y
(
'
f
s
o
c
k
o
p
e
n
'
,
 
$
d
i
s
a
b
l
e
d
_
f
u
n
c
t
i
o
n
s
)
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
 
a
n
 
a
s
y
n
c
 
s
o
c
k
e
t

	
	
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
 
s
o
c
k
e
t
 
t
o
 
'
.
$
u
r
l
,
 
'
S
o
c
k
e
t
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
l
o
g
g
i
n
g
_
t
i
m
e
_
s
t
a
r
t
 
=
 
m
i
c
r
o
t
i
m
e
(
t
r
u
e
)
;

	

	
	
$
f
p
 
=
 
f
s
o
c
k
o
p
e
n
(
$
p
a
r
t
s
[
'
h
o
s
t
'
]
,
 
$
p
o
r
t
,
 
$
e
r
r
n
o
,
 
$
e
r
r
s
t
r
,
 
5
)
;

	
	

	
	
i
f
 
(
!
$
f
p
)
 
{

	
	
	
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
U
n
a
b
l
e
 
t
o
 
o
p
e
n
 
s
o
c
k
e
t
 
t
o
 
'
.
$
u
r
l
,
 
'
S
o
c
k
e
t
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

	
	

	
	
s
t
r
e
a
m
_
s
e
t
_
t
i
m
e
o
u
t
(
$
f
p
,
 
1
)
;

	
	
s
t
r
e
a
m
_
s
e
t
_
b
l
o
c
k
i
n
g
(
$
f
p
,
 
f
a
l
s
e
)
;

	
	

	
	
$
o
u
t
 
=
 
$
t
y
p
e
.
"
 
"
.
$
p
a
r
t
s
[
'
p
a
t
h
'
]
.
'
?
'
.
$
p
a
r
t
s
[
'
q
u
e
r
y
'
]
.
"
 
H
T
T
P
/
1
.
1
\
r
\
n
"
;

	
	
$
o
u
t
.
=
 
"
H
o
s
t
:
 
"
.
$
p
a
r
t
s
[
'
h
o
s
t
'
]
.
"
\
r
\
n
"
;

	
	
$
o
u
t
 
.
=
 
"
U
s
e
r
-
A
g
e
n
t
:
 
J
o
m
r
e
s
\
r
\
n
"
;

	
	
$
o
u
t
.
=
 
"
C
o
n
t
e
n
t
-
T
y
p
e
:
 
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
/
x
-
w
w
w
-
f
o
r
m
-
u
r
l
e
n
c
o
d
e
d
\
r
\
n
"
;

	
	
$
o
u
t
.
=
 
"
C
o
n
t
e
n
t
-
L
e
n
g
t
h
:
 
"
.
s
t
r
l
e
n
(
$
p
o
s
t
_
s
t
r
i
n
g
)
.
"
\
r
\
n
"
;

	
	
$
o
u
t
.
=
 
"
C
o
n
n
e
c
t
i
o
n
:
 
C
l
o
s
e
\
r
\
n
\
r
\
n
"
;

	
	
i
f
 
(
$
t
y
p
e
 
=
=
 
"
P
O
S
T
"
 
&
&
 
$
p
o
s
t
_
s
t
r
i
n
g
 
!
=
 
"
"
)
 
{

	
	
	
$
o
u
t
.
=
 
$
p
o
s
t
_
s
t
r
i
n
g
;

	
	
}


	
	
f
w
r
i
t
e
(
$
f
p
,
 
$
o
u
t
)
;

	
	
f
c
l
o
s
e
(
$
f
p
)
;

	
	

	
	
$
l
o
g
g
i
n
g
_
t
i
m
e
_
e
n
d
 
=
 
m
i
c
r
o
t
i
m
e
(
t
r
u
e
)
;

	
	
$
l
o
g
g
i
n
g
_
t
i
m
e
 
=
 
$
l
o
g
g
i
n
g
_
t
i
m
e
_
e
n
d
 
-
 
$
l
o
g
g
i
n
g
_
t
i
m
e
_
s
t
a
r
t
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
o
c
k
e
t
 
c
a
l
l
 
t
o
o
k
 
'
.
$
l
o
g
g
i
n
g
_
t
i
m
e
.
'
 
s
e
c
o
n
d
s
 
'
,
 
'
S
o
c
k
e
t
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
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
c
u
r
l
_
i
n
i
t
'
)
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
 
c
u
r
l
 
i
f
 
e
n
a
b
l
e
d

	
	
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
 
a
 
c
u
s
t
o
m
 
G
E
T
 
h
e
r
e
 
s
o
 
t
h
a
t
 
d
o
m
a
i
n
s
 
w
i
t
h
 
n
o
n
 
l
a
t
i
n
 
c
h
a
r
s
 
w
i
l
l
 
b
e
 
h
a
n
d
l
e
d
 
p
r
o
p
e
r
l
y

	
	
i
f
 
(
$
t
y
p
e
 
=
=
 
"
G
E
T
"
)
 
{

	
	
	
$
t
y
p
e
 
=
 
"
X
G
E
T
"
;

	
	
}

	
	

	
	
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
 
c
u
r
l
 
c
a
l
l
 
t
o
 
'
.
$
u
r
l
,
 
'
C
u
r
l
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
l
o
g
g
i
n
g
_
t
i
m
e
_
s
t
a
r
t
 
=
 
m
i
c
r
o
t
i
m
e
(
t
r
u
e
)
;

	
	

	
	
$
c
h
 
=
 
c
u
r
l
_
i
n
i
t
(
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
R
E
T
U
R
N
T
R
A
N
S
F
E
R
,
 
t
r
u
e
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
U
S
E
R
A
G
E
N
T
,
 
'
J
o
m
r
e
s
'
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
U
R
L
,
 
$
u
r
l
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
C
U
S
T
O
M
R
E
Q
U
E
S
T
,
 
$
t
y
p
e
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
F
O
L
L
O
W
L
O
C
A
T
I
O
N
,
 
t
r
u
e
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
R
T
,
 
$
p
o
r
t
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
T
I
M
E
O
U
T
,
 
4
8
0
)
;

	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
H
T
T
P
H
E
A
D
E
R
,
 
a
r
r
a
y
(
'
C
o
n
t
e
n
t
-
T
y
p
e
:
 
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
/
x
-
w
w
w
-
f
o
r
m
-
u
r
l
e
n
c
o
d
e
d
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
'
)
)
;

	
	

	
	
i
f
 
(
$
t
y
p
e
 
=
=
 
"
P
O
S
T
"
)
 
{

	
	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
,
 
1
)
;

	
	
	
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
F
I
E
L
D
S
,
 
$
p
o
s
t
_
s
t
r
i
n
g
)
;

	
	
}

	
	
$
c
u
r
l
_
o
u
t
p
u
t
 
=
 
c
u
r
l
_
e
x
e
c
(
$
c
h
)
;

	
	
c
u
r
l
_
c
l
o
s
e
(
$
c
h
)
;

	
	

	
	
$
l
o
g
g
i
n
g
_
t
i
m
e
_
e
n
d
 
=
 
m
i
c
r
o
t
i
m
e
(
t
r
u
e
)
;

	
	
$
l
o
g
g
i
n
g
_
t
i
m
e
 
=
 
$
l
o
g
g
i
n
g
_
t
i
m
e
_
e
n
d
 
-
 
$
l
o
g
g
i
n
g
_
t
i
m
e
_
s
t
a
r
t
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
C
u
r
l
 
c
a
l
l
 
t
o
o
k
 
'
.
$
l
o
g
g
i
n
g
_
t
i
m
e
.
'
 
s
e
c
o
n
d
s
 
'
,
 
'
C
u
r
l
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
*

A
 
s
i
m
p
l
e
 
f
u
n
c
t
i
o
n
 
t
o
 
g
e
t
 
t
h
e
 
m
a
r
k
e
r
 
r
e
l
a
t
i
v
e
 
p
a
t
h

*
/


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
m
a
r
k
e
r
_
s
r
c
(
$
m
a
r
k
e
r
_
i
m
a
g
e
 
=
 
'
'
)
 

{

	
i
f
 
(
$
m
a
r
k
e
r
_
i
m
a
g
e
 
=
=
 
'
'
)

	
	
r
e
t
u
r
n
 
'
'
;

	

	
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
_
I
M
A
G
E
L
O
C
A
T
I
O
N
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
m
a
r
k
e
r
s
'
.
J
R
D
S
.
$
m
a
r
k
e
r
_
i
m
a
g
e
)
)
 
{

	
	
$
r
e
s
u
l
t
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
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
m
a
r
k
e
r
s
/
'
.
$
m
a
r
k
e
r
_
i
m
a
g
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
_
I
M
A
G
E
S
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
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
b
l
u
e
.
p
n
g
'
)
)
 
{

	
	
$
r
e
s
u
l
t
 
=
 
J
O
M
R
E
S
_
I
M
A
G
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
m
a
r
k
e
r
s
/
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
b
l
u
e
.
p
n
g
'
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
s
u
l
t
 
=
 
'
'
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
s
u
l
t
;

}

	

/
*

A
 
s
i
m
p
l
e
 
f
u
n
c
t
i
o
n
 
t
o
 
p
u
l
l
 
t
h
e
 
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
 
b
a
s
e
d
 
o
n
 
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
 
n
u
m
b
e
r

*
/


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
_
f
o
r
_
t
a
g
(
$
t
a
g
)
 

{

 
 
 
 
$
t
a
g
 
=
 
t
r
i
m
(
f
i
l
t
e
r
_
v
a
r
(
$
t
a
g
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
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
 
`
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
 
`
t
a
g
`
=
 
'
"
.
$
t
a
g
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

 
 
 
 
r
e
t
u
r
n
 
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

}

 
 
 
 

/
*

T
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
 
a
l
l
o
w
s
 
a
 
s
c
r
i
p
t
 
w
r
i
t
e
r
 
t
o
 
a
d
d
 
w
e
b
h
o
o
k
 
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
s
 
d
y
n
a
m
i
c
a
l
l
y
.
 

I
f
 
t
h
e
 
c
o
l
l
e
c
t
i
o
n
 
s
c
r
i
p
t
 
v
a
r
i
a
b
l
e
 
i
s
 
s
e
t
,
 
t
h
e
n
 
t
h
e
 
n
o
n
e
/
b
a
s
i
c
/
o
a
u
t
h
 
a
u
t
h
m
e
t
h
o
d
 
p
r
o
c
e
s
s
o
r
s
 
w
i
l
l
 
u
s
e
 
a
 
c
o
l
l
e
c
t
i
o
n
 
s
c
r
i
p
t
 
t
h
a
t
 
g
o
e
s
 
b
y
 
t
h
e
 
n
a
m
e
 
o
f
 
c
o
l
l
e
c
t
o
r
_
$
c
o
l
l
e
c
t
i
o
n
_
s
c
r
i
p
t
_
n
a
m
e
.
p
h
p
 
,
 
e
.
g
.
 
c
o
l
l
e
c
t
o
r
_
d
a
s
h
b
o
a
r
d
.
p
h
p

O
t
h
e
r
w
i
s
e
 
t
h
e
 
p
r
o
c
e
s
s
o
r
 
w
i
l
l
 
a
t
t
e
m
p
t
 
t
o
 
u
s
e
 
t
h
e
 
c
o
n
t
e
n
t
s
 
o
f
 
t
h
e
 
o
b
j
e
c
t
'
s
 
$
d
a
t
a
 
v
a
r
i
a
b
l
e
 
i
n
s
t
e
a
d
.

*
/


f
u
n
c
t
i
o
n
 
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
c
o
n
t
e
n
t
s
)

{

 
 
 
 
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
 
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
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
'
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
m
e
s
s
a
g
e
s
[
]
 
=
 
$
c
o
n
t
e
n
t
s
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
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
'
,
 
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
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
W
e
b
h
o
o
k
 
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
 
s
e
t
 
'
.
$
c
o
n
t
e
n
t
s
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
,
 
'
C
o
r
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
 
,
 
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
c
o
n
t
e
n
t
s
)
 
)
;

}


 
/
*
*

 
*
 
I
m
p
l
o
d
e
s
 
a
r
r
a
y
s
 
f
o
r
 
u
s
e
 
w
i
t
h
 
q
u
e
r
i
e
s
 
w
h
e
r
e
 
I
N
 
i
s
 
u
s
e
d

 
*

 
*
 
F
o
r
 
p
e
r
f
o
r
m
a
n
c
e
 
r
e
a
s
o
n
s
 
I
N
 
i
s
 
u
s
e
d
 
e
x
t
e
n
s
i
v
e
l
y
,
 
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
 
i
s
 
u
s
e
d
 
w
h
e
n
 
b
u
i
l
d
i
n
g
 
q
u
e
r
i
e
s
 
b
a
s
e
d
 
o
f
f
 
o
f
 
a
r
r
a
y
s
 

 
*

 
*
/

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
i
m
p
l
o
d
e
(
$
e
l
e
m
e
n
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
,
 
$
i
n
t
e
g
e
r
s
 
=
 
t
r
u
e
)

{

 
 
 
 
$
t
x
t
 
=
 
'
'
;

 
 
 
 
$
i
 
=
 
1
;

 
 
 
 
$
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
e
l
e
m
e
n
t
s
)
;


 
 
 
 
i
f
 
(
$
c
o
u
n
t
 
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
 
"
'
'
"
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
e
l
e
m
e
n
t
s
 
a
s
 
$
e
l
e
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
t
e
g
e
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
x
t
 
.
=
 
(
i
n
t
)
 
$
e
l
e
m
e
n
t
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
x
t
 
.
=
 
"
'
"
.
$
e
l
e
m
e
n
t
.
"
'
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
i
 
<
 
$
c
o
u
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
x
t
 
.
=
 
'
,
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
+
+
$
i
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
t
x
t
;

}


/
*
*

 
*
 
A
 
q
u
i
c
k
 
f
u
n
c
t
i
o
n
 
t
o
 
t
r
i
m
 
p
a
t
h
 
n
a
m
e
s

 
*
/

f
u
n
c
t
i
o
n
 
f
i
x
_
p
a
t
h
(
$
p
a
t
h
 
=
 
'
'
)

{

 
 
 
 
$
p
a
t
h
 
=
 
r
t
r
i
m
(
$
p
a
t
h
,
 
'
/
'
)
;

 
 
 
 
$
p
a
t
h
 
=
 
r
t
r
i
m
(
$
p
a
t
h
,
 
'
\
\
'
)
;

 
 
 
 
$
p
a
t
h
 
=
 
$
p
a
t
h
.
'
/
'
;


 
 
 
 
r
e
t
u
r
n
 
$
p
a
t
h
;

}



/
*
*

 
*
 
A
 
f
u
n
c
t
i
o
n
 
t
o
 
o
b
s
f
u
c
a
t
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
e
s
 
i
n
 
c
o
n
t
e
n
t
 
t
o
 
d
e
f
e
n
d
 
a
g
a
i
n
s
t
 
s
p
a
m
m
e
r
s
.

 
*

 
*
 
h
t
t
p
:
/
/
w
w
w
.
m
a
u
r
i
t
s
.
v
d
s
c
h
e
e
.
n
l
/
p
h
p
_
h
i
d
e
_
e
m
a
i
l
/

 
*

 
*
/

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
h
i
d
e
_
e
m
a
i
l
(
$
e
m
a
i
l
)

{

 
 
 
 
$
c
h
a
r
a
c
t
e
r
_
s
e
t
 
=
 
'
+
-
.
0
1
2
3
4
5
6
7
8
9
@
A
B
C
D
E
F
G
H
I
J
K
L
M
N
O
P
Q
R
S
T
U
V
W
X
Y
Z
_
a
b
c
d
e
f
g
h
i
j
k
l
m
n
o
p
q
r
s
t
u
v
w
x
y
z
'
;

 
 
 
 
$
k
e
y
 
=
 
s
t
r
_
s
h
u
f
f
l
e
(
$
c
h
a
r
a
c
t
e
r
_
s
e
t
)
;

 
 
 
 
$
c
i
p
h
e
r
_
t
e
x
t
 
=
 
'
'
;

 
 
 
 
$
i
d
 
=
 
'
e
'
.
r
a
n
d
(
1
,
 
9
9
9
9
9
9
9
9
9
)
;

 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
s
t
r
l
e
n
(
$
e
m
a
i
l
)
;
 
$
i
 
+
=
 
1
)
 
{

 
 
 
 
 
 
 
 
$
c
i
p
h
e
r
_
t
e
x
t
 
.
=
 
$
k
e
y
[
s
t
r
p
o
s
(
$
c
h
a
r
a
c
t
e
r
_
s
e
t
,
 
$
e
m
a
i
l
[
$
i
]
)
]
;

 
 
 
 
}

 
 
 
 
$
s
c
r
i
p
t
 
=
 
'
v
a
r
 
a
=
"
'
.
$
k
e
y
.
'
"
;
v
a
r
 
b
=
a
.
s
p
l
i
t
(
"
"
)
.
s
o
r
t
(
)
.
j
o
i
n
(
"
"
)
;
v
a
r
 
c
=
"
'
.
$
c
i
p
h
e
r
_
t
e
x
t
.
'
"
;
v
a
r
 
d
=
"
"
;
'
;

 
 
 
 
$
s
c
r
i
p
t
 
.
=
 
'
f
o
r
(
v
a
r
 
e
=
0
;
e
<
c
.
l
e
n
g
t
h
;
e
+
+
)
d
+
=
b
.
c
h
a
r
A
t
(
a
.
i
n
d
e
x
O
f
(
c
.
c
h
a
r
A
t
(
e
)
)
)
;
'
;

 
 
 
 
$
s
c
r
i
p
t
 
.
=
 
'
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
"
'
.
$
i
d
.
'
"
)
.
i
n
n
e
r
H
T
M
L
=
"
<
a
 
h
r
e
f
=
\
\
"
m
a
i
l
t
o
:
"
+
d
+
"
\
\
"
>
"
+
d
+
"
<
/
a
>
"
'
;

 
 
 
 
$
s
c
r
i
p
t
 
=
 
'
e
v
a
l
(
"
'
.
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
a
r
r
a
y
(
'
\
\
'
,
 
'
"
'
)
,
 
a
r
r
a
y
(
'
\
\
\
\
'
,
 
'
\
"
'
)
,
 
$
s
c
r
i
p
t
)
.
'
"
)
'
;

 
 
 
 
$
s
c
r
i
p
t
 
=
 
'
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
/
*
<
!
[
C
D
A
T
A
[
*
/
'
.
$
s
c
r
i
p
t
.
'
/
*
]
]
>
*
/
<
/
s
c
r
i
p
t
>
'
;


 
 
 
 
r
e
t
u
r
n
 
'
<
s
p
a
n
 
i
d
=
"
'
.
$
i
d
.
'
"
>
[
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
 
p
r
o
t
e
c
t
e
d
 
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
]
<
/
s
p
a
n
>
'
.
$
s
c
r
i
p
t
;

}


 
/
*
*

 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
t
h
e
 
u
s
e
r
 
c
a
n
 
v
i
e
w
 
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

 
*

 
*
 
U
s
e
d
 
e
x
t
e
n
s
i
v
e
l
y
 
b
y
 
j
0
6
0
0
0
s
h
o
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
x
x
x
x
x
 
s
c
r
i
p
t
s
.
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
a
 
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
 
t
h
e
n
 
t
h
e
y
 
c
a
n
 
v
i
e
w
 
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
 
i
t
'
s
 
s
t
a
t
e
.
 
O
t
h
e
r
w
i
s
e
,
 
i
f
 
i
t
 
i
s
 
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
e
d
 
a
n
d
 
t
h
e
 
u
s
e
r
 
i
s
 
n
o
t
 
a
 
m
a
n
a
g
e
r
,
 
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
.
 
I
f
 
i
t
 
i
s
 
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
e
d
 
a
n
d
 
t
h
e
 
u
s
e
r
 
d
o
e
s
 
n
o
t
 
h
a
v
e
 
t
h
i
s
 
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
 
t
h
e
i
r
 
l
i
s
t
 
o
f
 
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
 
(
 
i
.
e
.
 
a
 
m
a
n
a
g
e
r
 
v
i
e
w
i
n
g
 
a
n
o
t
h
e
r
 
m
a
n
a
g
e
r
'
s
 
p
r
o
p
e
r
t
y
 
)
 
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
.

 
*

 
*
/

f
u
n
c
t
i
o
n
 
u
s
e
r
_
c
a
n
_
v
i
e
w
_
t
h
i
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
 
=
 
0
)

{

 
 
 
 
i
f
 
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

 
 
 
 
 
 
 
 
i
f
 
(
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
 
0
 
&
&
 
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
 
|
|
 
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
M
a
n
a
g
e
r
 
&
&
 
!
i
n
_
a
r
r
a
y
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
)
)
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


/
*
*

 
*
 
C
h
e
c
k
 
t
h
a
t
 
t
h
i
s
 
u
s
e
r
 
c
a
n
 
m
o
d
i
f
y
 
a
 
b
o
o
k
i
n
g

 
*
/

f
u
n
c
t
i
o
n
 
c
a
n
_
m
o
d
i
f
y
_
t
h
i
s
_
b
o
o
k
i
n
g
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
N
o
n
-
m
a
n
a
g
e
r
 
u
s
e
r
 
'
.
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
h
i
s
J
R
U
s
e
r
)
.
'
 
a
t
t
e
m
p
t
e
d
 
t
o
 
m
o
d
i
f
y
 
a
 
b
o
o
k
i
n
g
 
w
i
t
h
 
t
h
e
 
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
 
o
f
 
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
 
`
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
c
o
n
t
r
a
c
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
M
a
n
a
g
e
r
 
u
s
e
r
 
'
.
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
h
i
s
J
R
U
s
e
r
)
.
'
 
a
t
t
e
m
p
t
e
d
 
t
o
 
m
o
d
i
f
y
 
a
 
b
o
o
k
i
n
g
 
w
i
t
h
 
t
h
e
 
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
 
o
f
 
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
'
.
 
T
h
i
s
 
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
 
d
o
e
s
 
n
o
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
n
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
n
t
r
a
c
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
u
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
M
a
n
a
g
e
r
 
u
s
e
r
 
'
.
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
h
i
s
J
R
U
s
e
r
)
.
'
 
a
t
t
e
m
p
t
e
d
 
t
o
 
m
o
d
i
f
y
 
a
 
b
o
o
k
i
n
g
 
w
i
t
h
 
t
h
e
 
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
 
o
f
 
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
'
.
 
M
a
n
a
g
e
r
 
i
s
 
n
o
t
 
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
 
t
o
 
m
o
d
i
f
y
 
t
h
i
s
 
c
o
n
t
r
a
c
t
.
'
)
;

 
 
 
 
}


 
 
 
 
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
M
a
n
a
g
e
r
 
u
s
e
r
 
'
.
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
h
i
s
J
R
U
s
e
r
)
.
'
 
a
t
t
e
m
p
t
e
d
 
t
o
 
m
o
d
i
f
y
 
a
 
b
o
o
k
i
n
g
 
w
i
t
h
 
t
h
e
 
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
 
o
f
 
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
'
.
 
C
o
u
l
d
 
n
o
t
 
c
o
n
f
i
r
m
 
t
h
a
t
 
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
 
w
a
s
 
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
 
t
o
 
m
o
d
i
f
y
 
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
.
'
)
;

}


/
*
*

 
*
 
N
e
w
e
r
 
f
u
n
c
t
i
o
n
 
f
o
r
 
f
i
n
d
i
n
g
 
d
a
t
e
s
 
-
 
d
a
t
e
s
 
m
u
s
t
 
b
e
 
p
a
s
s
e
d
 
i
n
 
Y
/
m
/
d
 
f
o
r
m
a
t

 
*
/

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
p
e
r
i
o
d
s
(
$
s
t
a
r
t
,
 
$
e
n
d
,
 
$
i
n
t
e
r
v
a
l
 
=
 
n
u
l
l
)

{

 
 
 
 
$
s
t
a
r
t
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
$
s
t
a
r
t
)
;

 
 
 
 
$
e
n
d
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
$
e
n
d
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
i
n
t
e
r
v
a
l
)
)
 
{

 
 
 
 
 
 
 
 
$
i
n
t
e
r
v
a
l
 
=
 
n
e
w
 
D
a
t
e
I
n
t
e
r
v
a
l
(
'
P
1
D
'
)
;

 
 
 
 
}


 
 
 
 
$
p
e
r
i
o
d
 
=
 
n
e
w
 
D
a
t
e
P
e
r
i
o
d
(
$
s
t
a
r
t
,
 
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
 
$
e
n
d
)
;

 
 
 
 
$
d
a
t
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
e
r
i
o
d
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
$
d
 
=
 
$
d
a
t
e
-
>
f
o
r
m
a
t
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
s
[
 
]
 
=
 
$
d
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
d
a
t
e
s
;

}


/
*
*

 
*
 
F
u
n
c
t
i
o
n
 
t
o
 
g
e
t
 
t
h
e
 
c
l
i
e
n
t
 
I
P
 
a
d
d
r
e
s
s

 
*
/

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
g
e
t
_
c
l
i
e
n
t
_
i
p
(
)

{

 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
'
'
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
_
S
E
R
V
E
R
[
'
H
T
T
P
_
C
L
I
E
N
T
_
I
P
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
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
H
T
T
P
_
C
L
I
E
N
T
_
I
P
'
]
;

 
 
 
 
}
 
e
l
s
e
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
_
S
E
R
V
E
R
[
'
R
E
M
O
T
E
_
A
D
D
R
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
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
R
E
M
O
T
E
_
A
D
D
R
'
]
;

 
 
 
 
}
 
e
l
s
e
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
_
S
E
R
V
E
R
[
'
H
T
T
P
_
X
_
F
O
R
W
A
R
D
E
D
_
F
O
R
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
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
H
T
T
P
_
X
_
F
O
R
W
A
R
D
E
D
_
F
O
R
'
]
;

 
 
 
 
}
 
e
l
s
e
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
_
S
E
R
V
E
R
[
'
H
T
T
P
_
X
_
F
O
R
W
A
R
D
E
D
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
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
H
T
T
P
_
X
_
F
O
R
W
A
R
D
E
D
'
]
;

 
 
 
 
}
 
e
l
s
e
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
_
S
E
R
V
E
R
[
'
H
T
T
P
_
F
O
R
W
A
R
D
E
D
_
F
O
R
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
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
H
T
T
P
_
F
O
R
W
A
R
D
E
D
_
F
O
R
'
]
;

 
 
 
 
}
 
e
l
s
e
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
_
S
E
R
V
E
R
[
'
H
T
T
P
_
F
O
R
W
A
R
D
E
D
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
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
H
T
T
P
_
F
O
R
W
A
R
D
E
D
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
p
a
d
d
r
e
s
s
 
=
 
'
U
N
K
N
O
W
N
'
;

 
 
 
 
}


 
 
 
 
i
f
 
(
$
i
p
a
d
d
r
e
s
s
 
=
=
 
'
:
:
1
'
)
 
{

 
 
 
 
 
 
 
 
$
i
p
a
d
d
r
e
s
s
 
=
 
'
1
2
7
.
0
.
0
.
1
'
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
i
l
t
e
r
_
v
a
r
(
$
i
p
a
d
d
r
e
s
s
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
T
R
I
N
G
)
;

}


 
/
*
*

 
*
 
O
u
t
p
u
t
s
 
t
h
a
t
 
a
n
 
e
r
r
o
r
 
h
a
s
 
b
e
e
n
 
t
h
r
o
w
n

 
*

 
*
 
P
r
i
m
a
r
i
l
y
 
a
 
f
r
o
n
t
e
n
d
 
f
u
n
c
t
i
o
n
.
 
L
o
g
s
 
a
n
d
 
o
u
t
p
u
t
s
 
a
n
 
e
r
r
o
r
 
m
e
s
s
a
g
e
.
 
I
f
 
t
h
e
 
s
i
t
e
 
i
s
 
s
e
t
 
t
o
 
D
e
v
e
l
o
p
m
e
n
t
 
m
o
d
e
 
t
h
e
n
 
t
h
e
 
f
u
l
l
 
e
r
r
o
r
 
d
e
t
a
i
l
s
 
a
r
e
 
s
e
n
t
 
t
o
 
t
h
e
 
p
a
g
e
,
 
o
t
h
e
r
w
i
s
e
 
i
f
 
s
i
t
e
 
i
s
 
s
e
t
 
t
o
 
P
r
o
d
u
c
t
i
o
n
 
a
 
g
e
n
e
r
i
c
 
O
o
p
s
 
m
e
s
s
a
g
e
 
i
s
 
o
u
t
p
u
t
.
 
I
f
 
S
i
t
e
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
t
o
,
 
t
h
e
 
e
r
r
o
r
 
c
a
n
 
b
e
 
e
m
a
i
l
e
d
 
t
o
 
s
i
t
e
 
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
s
.
 
T
h
e
 
e
r
r
o
r
 
i
s
 
l
o
g
g
e
d
 
t
o
 
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
.
l
o
g
 
a
s
 
a
n
 
E
r
r
o
r
.

 
*

 
*
/

f
u
n
c
t
i
o
n
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
 
,
 
$
e
x
t
r
a
_
i
n
f
o
 
=
 
'
'
 
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


 
 
 
 
$
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
w
e
_
a
r
e
_
n
o
t
_
i
n
t
e
r
e
s
t
e
d
_
i
n
 
=
 
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
;

 
 
 
 
$
r
o
w
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
b
a
c
k
t
r
a
c
e
 
=
 
d
e
b
u
g
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
b
a
c
k
t
r
a
c
e
 
a
s
 
$
t
r
a
c
e
)
 
{

	
	
$
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
r
a
c
e
[
 
'
f
i
l
e
'
 
]
)
 
&
&
 
!
i
s
s
e
t
(
$
t
r
a
c
e
[
 
'
l
i
n
e
'
 
]
)
)
 
{

	
	
	
$
f
i
l
e
 
=
 
$
t
r
a
c
e
[
 
'
f
i
l
e
'
 
]
;

	
	
	
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
J
R
D
S
,
 
$
f
i
l
e
)
;

	
	
	
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
 
$
b
a
n
g
[
 
c
o
u
n
t
(
$
b
a
n
g
)
 
-
 
1
 
]
;

	
	
	
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
 
!
=
 
'
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
.
p
h
p
'
 
&
&
 
$
f
i
l
e
n
a
m
e
 
!
=
 
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
'
 
&
&
 
!
i
n
_
a
r
r
a
y
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
,
 
$
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
w
e
_
a
r
e
_
n
o
t
_
i
n
t
e
r
e
s
t
e
d
_
i
n
)
)
 
{

	
	
	
	
$
r
[
'
F
I
L
E
S
'
]
 
=
 
'
 
'
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
'
 
o
n
 
l
i
n
e
 
'
.
$
t
r
a
c
e
[
'
l
i
n
e
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
r
o
w
s
[
]
 
=
 
$
r
;

	
	
	
}

	
	
}

 
 
 
 
}


 
 
 
 
$
l
i
n
k
 
=
 
g
e
t
C
u
r
r
e
n
t
U
r
l
(
)
;

 
 
 
 
/
/
$
l
i
n
k
 
=
 
 
"
/
/
$
_
S
E
R
V
E
R
[
H
T
T
P
_
H
O
S
T
]
$
_
S
E
R
V
E
R
[
R
E
Q
U
E
S
T
_
U
R
I
]
"
;

 
 
 
 
$
c
l
e
a
n
e
d
_
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
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
l
i
n
k
)
;


 
 
 
 
i
f
 
(
i
s
_
o
b
j
e
c
t
(
$
e
)
)
 
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

 
 
 
 
 
 
 
 
'
U
R
L
'
 
=
>
 
$
c
l
e
a
n
e
d
_
l
i
n
k
,

 
 
 
 
 
 
 
 
'
M
E
S
S
A
G
E
'
 
=
>
 
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
,

	
	
'
E
X
T
R
A
_
I
N
F
O
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
i
n
f
o
,

 
 
 
 
 
 
 
 
'
F
I
L
E
'
 
=
>
 
$
e
-
>
g
e
t
F
i
l
e
(
)
,

 
 
 
 
 
 
 
 
'
L
I
N
E
'
 
=
>
 
$
e
-
>
g
e
t
L
i
n
e
(
)
,

 
 
 
 
 
 
 
 
'
T
R
A
C
E
'
 
=
>
 
$
e
-
>
g
e
t
T
r
a
c
e
A
s
S
t
r
i
n
g
(
)
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
M
E
S
S
A
G
E
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
M
E
S
S
A
G
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
M
E
S
S
A
G
E
'
,
 
f
a
l
s
e
)
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
F
I
L
E
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
F
I
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
F
I
L
E
'
,
 
f
a
l
s
e
)
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
L
I
N
E
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
L
I
N
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
L
I
N
E
'
,
 
f
a
l
s
e
)
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
T
R
A
C
E
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
T
R
A
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
T
R
A
C
E
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
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
'
M
E
S
S
A
G
E
'
 
=
>
 
$
e
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
[
'
I
P
_
N
U
M
B
E
R
'
]
 
=
 
j
o
m
r
e
s
_
g
e
t
_
c
l
i
e
n
t
_
i
p
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
D
A
T
E
T
I
M
E
'
]
 
=
 
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
F
R
O
N
T
E
N
D
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
e
r
r
o
r
_
d
e
v
e
l
o
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
r
o
w
s
'
,
 
$
r
o
w
s
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
e
r
r
o
r
_
h
t
m
l
 
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


 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
)
)
 
{

 
 
 
 
 
 
 
 
m
k
d
i
r
(
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
)
;

 
 
 
 
}


 
 
 
 
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
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
3
0
)
.
'
.
h
t
m
l
'
;


 
 
 
 
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
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
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
 
$
e
r
r
o
r
_
h
t
m
l
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
=
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
)
 
{

 
 
 
 
 
 
 
 
e
c
h
o
 
$
e
r
r
o
r
_
h
t
m
l
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
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
a
r
r
a
y
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
E
R
R
O
R
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
E
R
R
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
E
R
R
O
R
'
,
 
f
a
l
s
e
)
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
E
R
R
O
R
_
M
E
S
S
A
G
E
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
E
R
R
O
R
_
M
E
S
S
A
G
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
E
R
R
O
R
_
M
E
S
S
A
G
E
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
F
R
O
N
T
E
N
D
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
e
r
r
o
r
_
p
r
o
d
u
c
t
i
o
n
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


 
 
 
 
$
u
r
l
 
=
 
'
<
a
 
h
r
e
f
 
=
 
"
'
.
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
N
O
S
E
F
.
'
&
t
a
s
k
=
s
h
o
w
_
l
o
g
f
i
l
e
&
l
o
g
f
i
l
e
=
'
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
'
"
>
 
L
o
g
f
i
l
e
 
<
/
a
>
'
.

 
 
 
 
$
e
r
r
o
r
_
h
t
m
l

 
 
 
 
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
n
d
E
r
r
o
r
E
m
a
i
l
s
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
'
E
r
r
o
r
 
l
o
g
g
e
d
 
'
.
$
o
u
t
p
u
t
[
'
M
E
S
S
A
G
E
'
]
,
 
$
u
r
l
)
;

 
 
 
 
}


 
 
 
 
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
E
r
r
o
r
 
l
o
g
g
e
d
 
'
.
$
o
u
t
p
u
t
[
'
M
E
S
S
A
G
E
'
]
.
'
 
'
.
$
u
r
l
,
 
'
C
o
r
e
'
,
 
'
E
R
R
O
R
'
)
;

}


/
*
*

 
*
 
W
h
a
t
 
i
s
 
t
h
e
 
c
u
r
r
e
n
t
 
p
a
g
e
 
u
r
l
?

 
*
/

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
C
u
r
r
e
n
t
U
r
l
(
$
f
u
l
l
 
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
i
s
s
e
t
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
R
E
Q
U
E
S
T
_
U
R
I
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
p
a
r
s
e
 
=
 
p
a
r
s
e
_
u
r
l
(

 
 
 
 
 
 
 
 
 
 
 
 
(
i
s
s
e
t
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
H
T
T
P
S
'
]
)
 
&
&
 
s
t
r
c
a
s
e
c
m
p
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
H
T
T
P
S
'
]
,
 
'
o
f
f
'
)
 
?
 
'
h
t
t
p
s
:
/
/
'
 
:
 
'
h
t
t
p
:
/
/
'
)
.

 
 
 
 
 
 
 
 
 
 
 
 
(
i
s
s
e
t
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
H
T
T
P
_
H
O
S
T
'
]
)
 
?
 
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
H
T
T
P
_
H
O
S
T
'
]
 
:
 
(
i
s
s
e
t
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
E
R
V
E
R
_
N
A
M
E
'
]
)
 
?
 
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
E
R
V
E
R
_
N
A
M
E
'
]
 
:
 
'
'
)
)
.
(
(
$
f
u
l
l
)
 
?
 
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
R
E
Q
U
E
S
T
_
U
R
I
'
]
 
:
 
n
u
l
l
)

 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
$
p
a
r
s
e
[
'
p
o
r
t
'
]
 
=
 
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
E
R
V
E
R
_
P
O
R
T
'
]
;
 
/
/
 
S
e
t
u
p
 
p
r
o
t
o
c
o
l
 
f
o
r
 
s
u
r
e
 
(
8
0
 
i
s
 
d
e
f
a
u
l
t
)

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
h
t
t
p
_
b
u
i
l
d
_
u
r
l
(
'
'
,
 
$
p
a
r
s
e
)
;

 
 
 
 
}

}


/
*
*

 
*
 
R
e
t
u
r
n
 
t
r
u
e
 
i
f
 
t
h
e
 
h
o
s
t
 
C
M
S
 
i
s
 
W
o
r
d
p
r
e
s
s

 
*
/

f
u
n
c
t
i
o
n
 
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)

{

 
 
 
 
i
f
 
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
!
=
 
'
w
o
r
d
p
r
e
s
s
'
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



/
/
 

/
/
 

/
/
 

/
/
 


 
/
*
*

 
*
 
A
 
u
t
i
l
i
t
y
 
t
o
 
c
r
e
a
t
e
 
a
 
m
o
d
a
l
 
b
u
t
t
o
n
 
t
h
a
t
 
l
i
n
k
s
 
t
o
 
a
 
J
o
m
r
e
s
 
t
a
s
k
.

 
*

 
*
 
t
e
x
t
 
o
f
 
t
h
e
 
b
u
t
t
o
n
.

 
*
 
t
a
s
k
.
 
T
h
e
 
t
a
s
k
 
o
f
 
t
h
e
 
c
a
l
l
e
d
 
p
a
g
e
.

 
*
 
E
x
t
r
a
.
 
A
n
y
 
a
r
g
u
e
m
e
n
t
s
 
t
o
 
b
e
 
a
d
d
e
d
 
t
o
 
t
h
e
 
u
r
l
.

 
*
 
T
i
t
l
e
.
 
W
h
a
t
 
t
h
e
 
t
i
t
l
e
 
o
f
 
t
h
e
 
m
o
d
a
l
 
w
i
l
l
 
b
e
 
s
e
t
 
t
o
.

 
*

 
*
/

f
u
n
c
t
i
o
n
 
m
a
k
e
_
m
o
d
a
l
_
b
u
t
t
o
n
(
$
t
e
x
t
,
 
$
t
a
s
k
,
 
$
e
x
t
r
a
,
 
$
t
i
t
l
e
,
 
$
b
u
t
t
o
n
_
c
o
l
o
u
r
 
=
 
'
b
t
n
-
d
e
f
a
u
l
t
'
)

{

 
 
 
 
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
0
]
[
 
'
R
A
N
D
O
M
_
I
D
E
N
T
I
F
I
E
R
'
 
]
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
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
[
0
]
[
 
'
T
E
X
T
'
 
]
 
=
 
$
t
e
x
t
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
0
]
[
 
'
T
A
S
K
'
 
]
 
=
 
$
t
a
s
k
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
0
]
[
 
'
E
X
T
R
A
'
 
]
 
=
 
$
e
x
t
r
a
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
0
]
[
 
'
M
O
D
A
L
_
T
I
T
L
E
'
 
]
 
=
 
u
r
l
e
n
c
o
d
e
(
$
t
i
t
l
e
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
0
]
[
 
'
B
U
T
T
O
N
_
C
O
L
O
U
R
'
 
]
 
=
 
$
b
u
t
t
o
n
_
c
o
l
o
u
r
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
F
R
O
N
T
E
N
D
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
m
o
d
a
l
_
b
u
t
t
o
n
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


 
 
 
 
r
e
t
u
r
n
 
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


/
/
 



 
/
*
*

 
*
 
A
 
q
u
i
c
k
 
w
a
y
 
t
o
 
o
u
p
u
t
 
d
a
t
a
 
t
h
a
t
'
s
 
s
t
o
r
e
d
 
i
n
 
a
 
J
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
 
b
u
t
 
d
o
e
s
n
'
t
 
r
e
q
u
i
r
e
 
a
n
y
 
c
o
n
d
i
t
i
o
n
s
 
o
r
 
r
o
w
s
.

 
*

 
*
 
D
u
e
 
t
o
 
t
h
e
 
w
a
y
 
B
o
o
t
s
t
r
a
p
 
3
 
d
e
m
a
n
d
s
 
t
h
a
t
 
r
e
t
u
r
n
e
d
 
d
a
t
a
 
b
e
 
w
r
a
p
p
e
d
 
i
n
 
<
d
i
v
 
c
l
a
s
s
=
"
m
o
d
a
l
-
c
o
n
t
e
n
t
"
>
 
<
d
i
v
 
c
l
a
s
s
=
"
m
o
d
a
l
-
h
e
a
d
e
r
"
>
 
<
/
d
i
v
>
<
/
d
i
v
>
 
w
e
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
n
e
w
 
o
u
t
p
u
t
 
t
h
a
t
 
w
r
a
p
s
 
t
h
e
 
c
o
n
t
e
n
t
 
w
e
 
w
i
s
h
 
t
o
 
r
e
t
u
r
n
.
 
A
s
 
w
e
 
m
a
y
 
w
a
n
t
 
t
o
 
a
d
d
 
m
o
d
a
l
 
p
o
p
u
p
s
 
t
o
 
o
t
h
e
r
 
p
a
g
e
s
 
i
n
 
t
h
e
 
f
u
t
u
r
e
 
w
e
 
n
e
e
d
e
d
 
t
o
 
a
d
d
 
a
 
n
e
w
 
r
e
q
u
e
s
t
 
v
a
r
i
a
b
l
e
 
"
m
o
d
a
l
_
w
r
a
p
"
 
w
h
i
c
h
 
t
h
e
n
 
a
l
l
o
w
s
 
u
s
 
t
o
 
w
r
a
p
 
t
h
e
 
r
e
s
u
l
t
i
n
g
 
o
u
t
p
u
t
 
i
n
 
t
h
e
s
e
 
d
i
v
s
.
 
A
s
 
w
e
 
d
o
n
'
t
 
w
a
n
t
 
t
o
 
c
h
a
n
g
e
 
t
h
e
 
c
o
d
e
 
e
v
e
r
y
 
t
i
m
e
 
a
 
n
e
w
 
m
o
d
a
l
 
s
y
n
t
a
x
 
a
p
p
e
a
r
s
 
i
t
'
s
 
p
r
e
f
e
r
a
b
l
e
 
t
o
 
a
d
d
 
t
h
i
s
 
m
o
d
a
l
 
w
r
a
p
 
v
i
a
 
a
 
t
e
m
p
l
a
t
e
 
f
i
l
e
.
 
T
h
e
 
t
e
m
p
l
a
t
e
 
f
i
l
e
 
i
t
s
e
l
f
 
d
o
e
s
n
'
t
 
d
e
m
a
n
d
 
a
n
y
 
s
p
e
c
i
a
l
 
c
o
n
d
i
t
i
o
n
s
,
 
s
o
 
w
e
'
v
e
 
c
r
e
a
t
e
d
 
t
h
i
s
 
q
u
i
c
k
 
t
e
m
p
l
a
t
e
 
o
u
t
p
u
t
 
f
u
n
c
t
i
o
n
 
t
o
 
a
l
l
o
w
 
u
s
 
t
o
 
q
u
i
c
k
l
y
 
a
c
c
e
s
s
 
a
 
t
e
m
p
l
a
t
e
 
f
i
l
e
 
t
h
a
t
 
c
o
n
t
a
i
n
s
 
s
o
m
e
 
s
i
m
p
l
e
 
h
t
m
l
.

 
*
 
O
n
e
 
s
t
r
i
n
g
 
a
l
l
o
w
s
 
u
s
 
t
o
 
p
a
s
s
 
j
u
s
t
 
o
n
e
 
v
a
r
i
a
b
l
e
 
t
o
 
t
h
e
 
t
e
m
p
l
a
t
e
 
f
o
r
 
i
n
c
l
u
s
i
o
n
 
i
n
 
o
u
t
p
u
t
 
(
i
n
 
c
a
s
e
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
t
h
e
 
m
o
d
a
l
 
n
e
e
d
s
 
a
 
t
i
t
l
e
)

 
*

 
*
/

f
u
n
c
t
i
o
n
 
s
i
m
p
l
e
_
t
e
m
p
l
a
t
e
_
o
u
t
p
u
t
(
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
t
e
m
p
l
a
t
e
 
=
 
'
'
,
 
$
o
n
e
_
s
t
r
i
n
g
 
=
 
'
'
)

{

 
 
 
 
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
a
r
r
a
y
(
'
T
I
T
L
E
'
 
=
>
 
$
o
n
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
$
p
a
t
h
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
$
t
e
m
p
l
a
t
e
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


 
 
 
 
r
e
t
u
r
n
 
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


/
*
*

 
*
 
G
e
n
e
r
a
t
e
s
 
c
o
l
o
u
r
s
 
f
o
r
 
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
 
r
e
v
i
e
w
 
r
a
t
i
n
g
 
b
a
r
s

 
*
/

f
u
n
c
t
i
o
n
 
c
a
l
c
_
r
a
t
i
n
g
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
(
$
p
e
r
c
e
n
t
a
g
e
)

{

 
 
 
 
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
 
>
=
 
6
0
)
 
{

 
 
 
 
 
 
 
 
$
c
o
l
o
u
r
 
=
 
'
p
r
o
g
r
e
s
s
-
b
a
r
-
s
u
c
c
e
s
s
'
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
 
<
 
6
0
 
&
&
 
$
p
e
r
c
e
n
t
a
g
e
 
>
=
 
5
0
)
 
{

 
 
 
 
 
 
 
 
$
c
o
l
o
u
r
 
=
 
'
p
r
o
g
r
e
s
s
-
b
a
r
-
i
n
f
o
'
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
 
<
 
5
0
 
&
&
 
$
p
e
r
c
e
n
t
a
g
e
 
>
=
 
3
0
)
 
{

 
 
 
 
 
 
 
 
$
c
o
l
o
u
r
 
=
 
'
p
r
o
g
r
e
s
s
-
b
a
r
-
w
a
r
n
i
n
g
'
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
 
<
 
3
0
)
 
{

 
 
 
 
 
 
 
 
$
c
o
l
o
u
r
 
=
 
'
p
r
o
g
r
e
s
s
-
b
a
r
-
d
a
n
g
e
r
'
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
c
o
l
o
u
r
;

}


/
*
*

 
*
 
D
e
t
e
r
m
i
n
e
 
t
h
e
 
v
e
r
s
i
o
n
 
o
f
 
B
o
o
t
s
t
r
a
p
 
f
r
a
m
e
w
o
r
k
 
t
h
a
t
 
i
s
 
b
e
i
n
g
 
u
s
e
d

 
*
/

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
'
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
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
'
 
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
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
 
=
 
'
2
'
;

 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
L
e
a
v
e
s
 
u
s
 
r
o
o
m
 
t
o
 
m
a
n
o
u
v
e
r
 
i
n
 
t
h
e
 
f
u
t
u
r
e
 
w
h
e
n
 
n
e
w
e
r
 
v
e
r
s
i
o
n
s
 
a
r
e
 
c
r
e
a
t
e
d

 
 
 
 
 
 
 
 
$
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
'
 
]
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
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
;

}


 
/
*
*

 
*
 
F
o
r
 
p
l
u
g
i
n
s
 
t
o
 
f
i
n
d
 
t
h
e
 
c
o
r
r
e
c
t
 
s
u
b
-
d
i
r
e
c
t
o
r
y
 
f
o
r
 
t
h
e
 
t
e
m
p
l
a
t
e
 
b
a
s
e
d
 
o
n
 
s
i
t
e
 
s
e
t
t
i
n
g
s

 
*

 
*
 
t
o
d
o
 
A
d
d
 
s
u
p
p
o
r
t
 
f
o
r
 
B
o
o
t
s
t
r
a
p
 
4
 
i
n
 
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
 
a
r
e
a

 
*
/

 

f
u
n
c
t
i
o
n
 
f
i
n
d
_
p
l
u
g
i
n
_
t
e
m
p
l
a
t
e
_
d
i
r
e
c
t
o
r
y
(
)

{

 
 
 
 
$
t
e
m
p
l
a
t
e
_
d
i
r
 
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
t
e
m
p
l
a
t
e
_
d
i
r
 
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
t
e
m
p
l
a
t
e
_
d
i
r
 
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
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
l
a
t
e
_
d
i
r
 
=
 
$
t
e
m
p
l
a
t
e
_
d
i
r
.
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
t
e
m
p
l
a
t
e
_
d
i
r
;

}


/
*
*

 
*
 
R
e
t
u
r
n
 
a
n
 
a
r
r
a
y
 
o
f
 
d
a
t
e
s
 

 
*

 
*
 
R
e
c
e
i
v
e
s
 
t
w
o
 
d
a
t
e
s
 
Y
/
m
/
d
 
a
n
d
 
r
e
t
u
r
n
s
 
a
l
l
 
d
a
t
e
s
 
b
e
t
w
e
e
n
 
i
n
 
Y
/
m
/
d
 
f
o
r
m
a
t
e

 
*

 
*
/

f
u
n
c
t
i
o
n
 
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
d
1
,
 
$
d
2
)

{

 
 
 
 
$
d
a
y
s
 
=
 
(
i
n
t
)
 
f
i
n
d
D
a
y
s
F
o
r
D
a
t
e
s
(
$
d
1
,
 
$
d
2
)
;

 
 
 
 
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
u
r
r
e
n
t
D
a
y
 
=
 
$
d
1
;

 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
c
u
r
r
e
n
t
D
a
y
)
;

 
 
 
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
$
d
a
y
s
;
 
$
i
 
<
=
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
D
a
y
 
=
 
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
,
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
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
 
]
 
=
 
$
c
u
r
r
e
n
t
D
a
y
;

 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
c
u
r
r
e
n
t
D
a
y
)
;

 
 
 
 
 
 
 
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
1
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
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
;

}


/
*
*

 
*
 
G
e
t
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
 
b
e
t
w
e
e
n
 
t
w
o
 
d
a
t
e
s
 
(
Y
/
m
/
d
)

 
*
/

f
u
n
c
t
i
o
n
 
f
i
n
d
D
a
y
s
F
o
r
D
a
t
e
s
(
$
d
1
,
 
$
d
2
)

{

 
 
 
 
$
d
i
f
f
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
d
1
,
 
$
d
2
)
;


 
 
 
 
r
e
t
u
r
n
 
$
d
i
f
f
;

}


/
*
*

 
*
 
I
m
p
o
r
t
 
i
m
a
g
e
s
 
f
r
o
m
 
t
h
e
 
u
p
l
o
a
d
e
d
i
m
a
g
e
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
 
i
n
t
o
 
t
h
e
 
d
a
t
a
b
a
s
e

 
*
/

f
u
n
c
t
i
o
n
 
i
m
p
o
r
t
_
i
m
a
g
e
s
_
t
o
_
m
e
d
i
a
_
c
e
n
t
r
e
_
d
i
r
e
c
t
o
r
i
e
s
(
)

{

 
 
 
 
/
/
 
W
e
 
a
r
e
 
g
o
i
n
g
 
t
o
 
m
o
v
e
 
a
n
y
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
s
,
 
s
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s
 
a
n
d
 
r
o
o
m
 
i
m
a
g
e
s
 
i
n
t
o
 
t
h
e
 
n
e
w
 
m
e
d
i
a
 
c
e
n
t
r
e
'
s
 
r
e
s
o
u
r
c
e
 
d
i
r
e
c
t
o
r
i
e
s
.

 
 
 
 
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
,
p
u
b
l
i
s
h
e
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
;

 
 
 
 
$
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
s
 
$
p
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
p
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


 
 
 
 
$
r
e
s
o
u
r
c
e
_
t
y
p
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
r
e
s
o
u
r
c
e
_
t
y
p
e
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
r
e
s
o
u
r
c
e
_
t
y
p
e
'
 
=
>
 
'
r
o
o
m
s
'
,
 
'
r
e
s
o
u
r
c
e
_
i
d
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
 
=
>
 
t
r
u
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
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
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
r
e
s
o
u
r
c
e
_
t
y
p
e
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
r
e
s
o
u
r
c
e
_
t
y
p
e
'
 
=
>
 
'
s
l
i
d
e
s
h
o
w
'
,
 
'
r
e
s
o
u
r
c
e
_
i
d
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
 
=
>
 
f
a
l
s
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
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
S
L
I
D
E
S
H
O
W
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
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
S
L
I
D
E
S
H
O
W
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
r
e
s
o
u
r
c
e
_
t
y
p
e
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
r
e
s
o
u
r
c
e
_
t
y
p
e
'
 
=
>
 
'
p
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
r
e
s
o
u
r
c
e
_
i
d
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
 
=
>
 
f
a
l
s
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
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
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
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
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
,
 
'
n
o
t
e
s
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
M
E
D
I
A
_
C
E
N
T
R
E
_
N
O
T
E
S
_
C
O
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
M
E
D
I
A
_
C
E
N
T
R
E
_
N
O
T
E
S
_
C
O
R
E
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
e
m
p
t
y
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
_
t
y
p
e
s
)
 
&
&
 
!
e
m
p
t
y
(
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
 
a
s
 
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
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
i
d
.
J
R
D
S
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
j
o
o
m
l
a
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
j
o
o
m
l
a
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
m
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
j
o
o
m
l
a
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
t
y
p
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
o
u
r
c
e
_
t
y
p
e
s
 
a
s
 
$
t
y
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
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
$
t
y
p
e
[
'
r
e
s
o
u
r
c
e
_
t
y
p
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
$
t
y
p
e
[
'
r
e
s
o
u
r
c
e
_
t
y
p
e
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
m
e
d
i
u
m
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
m
e
d
i
u
m
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
L
e
t
'
s
 
s
t
a
r
t
 
w
i
t
h
 
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
m
a
g
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
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
i
d
.
'
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
'
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
i
d
.
'
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
i
d
.
'
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
'
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
i
d
.
'
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
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
i
d
.
'
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
'
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
i
d
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
i
d
.
'
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
'
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
i
d
.
'
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
i
d
.
'
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
'
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
i
d
.
'
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
.
J
R
D
S
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
i
d
.
'
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
'
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
i
d
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
i
d
.
'
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
'
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
i
d
.
'
_
t
h
u
m
b
n
a
i
l
_
m
e
d
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
i
d
.
'
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
'
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
i
d
.
'
_
t
h
u
m
b
n
a
i
l
_
m
e
d
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
p
r
o
p
e
r
t
y
'
.
J
R
D
S
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
m
e
d
i
u
m
'
.
J
R
D
S
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
i
d
.
'
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
'
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
i
d
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
N
o
w
 
a
n
y
 
s
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
 
 
 
 
$
s
l
i
d
e
s
h
o
w
_
i
m
a
g
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
$
b
a
s
e
_
p
a
t
h
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
s
l
i
d
e
s
h
o
w
_
i
m
a
g
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
m
e
d
i
u
m
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
m
e
d
i
u
m
'
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
s
l
i
d
e
s
h
o
w
_
i
m
a
g
e
s
 
a
s
 
$
i
m
a
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
 
s
l
i
d
e
s
h
o
w
 
i
m
a
g
e
 
f
i
l
e
s
 
d
i
r
e
c
t
l
y
 
u
n
d
e
r
 
/
N
/
 
h
a
v
e
 
t
h
e
 
p
a
t
t
e
r
n
 
f
i
l
e
n
a
m
e
/
f
i
l
e
n
a
m
e
_
t
h
u
m
b
n
a
i
l
/
f
i
l
e
n
a
m
e
_
t
h
u
m
b
n
a
i
l
_
m
e
d
,
 
s
o
 
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
 
t
h
e
 
m
a
i
n
 
f
i
l
e
,
 
t
h
e
n
 
m
o
v
e
 
i
t
'
s
 
m
e
d
i
u
m
/
t
h
u
m
b
n
a
i
l
s
 
o
v
e
r
 
a
f
t
e
r
w
a
r
d
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
s
t
r
s
t
r
(
'
_
t
h
u
m
b
n
a
i
l
'
,
 
$
i
m
a
g
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
n
a
m
e
_
a
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
.
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
i
m
a
g
e
_
n
a
m
e
_
a
r
r
a
y
[
c
o
u
n
t
(
$
i
m
a
g
e
_
n
a
m
e
_
a
r
r
a
y
)
 
-
 
1
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
n
a
m
e
 
=
 
i
m
p
l
o
d
e
(
$
i
m
a
g
e
_
n
a
m
e
_
a
r
r
a
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
$
i
m
a
g
e
_
n
a
m
e
.
'
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
.
J
R
D
S
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
$
i
m
a
g
e
_
n
a
m
e
.
'
_
t
h
u
m
b
n
a
i
l
_
m
e
d
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
s
l
i
d
e
s
h
o
w
'
.
J
R
D
S
.
'
0
'
.
J
R
D
S
.
'
m
e
d
i
u
m
'
.
J
R
D
S
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
F
i
n
a
l
l
y
 
w
e
'
l
l
 
l
o
o
k
 
f
o
r
 
r
o
o
m
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
i
m
a
g
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
r
o
o
m
_
i
m
a
g
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
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
i
d
.
'
_
r
o
o
m
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
r
o
o
m
_
i
m
a
g
e
s
 
a
s
 
$
i
m
a
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
1
 
=
 
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
_
t
h
u
m
b
n
a
i
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
s
1
 
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
p
o
s
2
 
=
 
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
$
p
a
t
t
e
r
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
s
2
 
=
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
n
a
m
e
_
a
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
.
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
i
m
a
g
e
_
n
a
m
e
_
a
r
r
a
y
[
c
o
u
n
t
(
$
i
m
a
g
e
_
n
a
m
e
_
a
r
r
a
y
)
 
-
 
1
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
n
a
m
e
 
=
 
i
m
p
l
o
d
e
(
$
i
m
a
g
e
_
n
a
m
e
_
a
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
n
g
 
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
i
m
a
g
e
_
n
a
m
e
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
_
i
d
 
=
 
$
b
a
n
g
[
2
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
.
'
m
e
d
i
u
m
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
.
'
m
e
d
i
u
m
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
i
m
a
g
e
_
n
a
m
e
.
'
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
.
'
t
h
u
m
b
n
a
i
l
'
.
J
R
D
S
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
n
a
m
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
i
m
a
g
e
_
n
a
m
e
.
'
_
t
h
u
m
b
n
a
i
l
_
m
e
d
.
j
p
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
p
a
t
h
.
'
r
o
o
m
s
'
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
.
'
m
e
d
i
u
m
'
.
J
R
D
S
.
$
i
m
a
g
e
_
n
a
m
e
.
'
.
j
p
g
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


/
*
*

 
*
 
O
u
t
p
u
t
 
s
i
z
e
 
w
i
t
h
 
B
,
K
B
,
M
B
,
G
B
,
T
B
 
s
u
f
f
i
x
e
s

 
*
/

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
f
o
r
m
a
t
B
y
t
e
s
(
$
b
y
t
e
s
,
 
$
p
r
e
c
i
s
i
o
n
 
=
 
2
)

{

 
 
 
 
$
u
n
i
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
B
'
,
 
'
K
B
'
,
 
'
M
B
'
,
 
'
G
B
'
,
 
'
T
B
'
)
;


 
 
 
 
$
b
y
t
e
s
 
=
 
m
a
x
(
$
b
y
t
e
s
,
 
0
)
;

 
 
 
 
$
p
o
w
 
=
 
f
l
o
o
r
(
(
$
b
y
t
e
s
 
?
 
l
o
g
(
$
b
y
t
e
s
)
 
:
 
0
)
 
/
 
l
o
g
(
1
0
2
4
)
)
;

 
 
 
 
$
p
o
w
 
=
 
m
i
n
(
$
p
o
w
,
 
c
o
u
n
t
(
$
u
n
i
t
s
)
 
-
 
1
)
;


 
 
 
 
r
e
t
u
r
n
 
r
o
u
n
d
(
$
b
y
t
e
s
,
 
$
p
r
e
c
i
s
i
o
n
)
.
'
 
'
.
$
u
n
i
t
s
[
$
p
o
w
]
;

}


/
*
*

 
*
 
D
e
b
u
g
g
i
n
g
 
t
o
o
l
 
t
o
 
f
i
n
d
 
s
c
r
i
p
t
s
 
t
h
a
t
 
w
e
r
e
 
c
a
l
l
e
d
 
w
h
e
n
 
a
n
 
e
r
r
o
r
 
w
a
s
 
t
r
i
g
g
e
r
e
d
.
 

 
*
/

f
u
n
c
t
i
o
n
 
e
c
h
o
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

 
 
 
 
$
t
r
a
c
e
 
=
 
d
e
b
u
g
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
t
r
a
c
e
 
a
s
 
$
t
)
 
{

 
 
 
 
 
 
 
 
$
f
i
l
e
_
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
J
R
D
S
,
 
$
t
[
 
'
f
i
l
e
'
 
]
)
;

 
 
 
 
 
 
 
 
$
f
i
l
e
 
=
 
$
f
i
l
e
_
a
r
r
[
 
c
o
u
n
t
(
$
f
i
l
e
_
a
r
r
)
 
-
 
1
 
]
;

 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
 
=
=
 
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
l
i
n
e
 
=
 
$
t
[
 
'
l
i
n
e
'
 
]
;

 
 
 
 
 
 
 
 
e
c
h
o
 
'
L
i
n
e
 
:
 
'
.
$
l
i
n
e
.
'
 
f
o
r
 
f
i
l
e
 
'
.
$
f
i
l
e
.
'
 
<
/
b
r
>
'
;

 
 
 
 
}

}


/
*
*

 
*
 
C
r
e
a
t
e
 
a
 
u
r
l
 
f
o
r
 
a
 
p
r
o
p
e
r
t
y
'
s
 
a
d
d
r
e
s
s
 
t
h
a
t
 
w
i
l
l
 
b
e
 
m
a
r
k
e
d
 
i
n
 
g
o
o
g
l
e
 
m
a
p
s

 
*
/

f
u
n
c
t
i
o
n
 
m
a
k
e
_
g
m
a
p
_
u
r
l
_
f
o
r
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

{

 
 
 
 
i
f
 
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
 
<
 
1
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


 
 
 
 
$
d
e
s
t
_
a
d
d
r
e
s
s
 
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
'
,
'
.
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
'
,
'
.
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
'
,
'
.
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
'
,
'
.
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
'
,
'
.
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
;


 
 
 
 
r
e
t
u
r
n
 
'
h
t
t
p
s
:
/
/
m
a
p
s
.
g
o
o
g
l
e
.
c
o
m
/
m
a
p
s
?
d
a
d
d
r
=
'
.
$
d
e
s
t
_
a
d
d
r
e
s
s
;

}


/
*
*

 
*
 
U
s
e
s
 
t
h
e
 
Q
R
 
c
o
d
e
 
l
i
b
r
a
r
y
 
t
o
 
c
r
e
a
t
e
 
q
r
 
c
o
d
e
s
 
i
n
 
t
h
e
 
t
e
m
p
 
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
n
d
 
r
e
t
u
r
n
s
 
r
e
l
a
t
i
v
e
,
 
a
n
d
 
a
b
s
o
l
u
t
e
 
p
a
t
h
s

 
*
/

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
m
a
k
e
_
q
r
_
c
o
d
e
(
$
s
t
r
i
n
g
 
=
 
'
'
,
 
$
f
o
r
m
a
t
 
=
 
'
t
e
x
t
'
)

{

 
 
 
 
$
d
i
r
 
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
q
r
_
c
o
d
e
s
'
;

 
 
 
 
t
e
s
t
_
a
n
d
_
m
a
k
e
_
d
i
r
e
c
t
o
r
y
(
$
d
i
r
)
;


 
 
 
 
i
f
 
(
$
s
t
r
i
n
g
 
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
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
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
 
m
d
5
(
$
s
t
r
i
n
g
)
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
d
i
r
.
J
R
D
S
.
'
q
r
_
c
o
d
e
_
'
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
'
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
\
P
H
P
Q
R
C
o
d
e
\
Q
R
c
o
d
e
:
:
p
n
g
(
$
s
t
r
i
n
g
,
 
$
d
i
r
.
J
R
D
S
.
'
q
r
_
c
o
d
e
_
'
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
'
.
p
n
g
'
,
 
'
L
'
,
 
4
,
 
2
)
;

 
 
 
 
}


 
 
 
 
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
r
e
l
a
t
i
v
e
_
p
a
t
h
'
 
=
>
 
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
t
e
m
p
/
q
r
_
c
o
d
e
s
/
'
.
'
q
r
_
c
o
d
e
_
'
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
'
.
p
n
g
'
,
 
'
a
b
s
o
l
u
t
e
_
p
a
t
h
'
 
=
>
 
$
d
i
r
.
J
R
D
S
.
'
q
r
_
c
o
d
e
_
'
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
'
.
p
n
g
'
)
;

}


/
*
*

 
*
 
U
s
e
d
 
b
y
 
a
j
a
x
 
s
e
a
r
c
h
 
f
o
r
 
s
e
a
r
c
h
i
n
g
 
f
o
r
 
t
o
w
n
 
n
a
m
e
s

 
*
/

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
n
e
r
i
c
L
i
k
e
(
$
i
d
A
r
r
a
y
,
 
$
f
i
e
l
d
T
o
S
e
a
r
c
h
,
 
$
i
d
A
r
r
a
y
i
s
I
n
t
e
g
e
r
 
=
 
t
r
u
e
)

{

 
 
 
 
$
n
e
w
A
r
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
A
r
r
a
y
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
$
n
e
w
A
r
r
[
 
]
 
=
 
$
i
d
;

 
 
 
 
}

 
 
 
 
$
i
d
A
r
r
a
y
 
=
 
$
n
e
w
A
r
r
;

	
$
n
 
=
 
c
o
u
n
t
(
$
i
d
A
r
r
a
y
)
;

 
 
 
 
$
t
x
t
 
=
 
'
 
(
 
`
'
.
$
f
i
e
l
d
T
o
S
e
a
r
c
h
.
'
`
 
L
I
K
E
 
'
;

 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
A
r
r
a
y
i
s
I
n
t
e
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
(
i
n
t
)
 
$
i
d
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
i
d
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
x
t
 
.
=
 
"
 
'
%
$
i
d
%
'
 
"
;

 
 
 
 
 
 
 
 
i
f
 
(
$
i
 
<
 
$
n
 
-
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
x
t
 
.
=
 
'
 
O
R
 
`
'
.
$
f
i
e
l
d
T
o
S
e
a
r
c
h
.
'
`
 
L
I
K
E
 
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
$
t
x
t
 
.
=
 
'
 
)
 
'
;


 
 
 
 
r
e
t
u
r
n
 
$
t
x
t
;

}


/
*
*

 
*
 
C
a
l
c
u
l
a
t
e
s
 
n
u
m
b
e
r
 
t
o
 
b
e
 
a
d
d
e
d
 
t
o
 
b
a
d
g
e
s
 
i
n
 
t
h
e
 
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
 
m
e
n
u

 
*
/

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
n
u
m
b
e
r
_
o
f
_
i
t
e
m
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
_
f
o
r
_
m
e
n
u
_
o
p
t
i
o
n
(
$
t
a
s
k
 
=
 
'
'
)

{

	
i
f
 
(
$
t
a
s
k
 
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
 
a
r
r
a
y
(
)
;

	
}


 
 
 
 
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
e
v
e
n
t
S
p
e
c
i
f
i
c
l
y
E
x
i
s
t
s
C
h
e
c
k
(
'
0
7
0
2
0
'
,
 
$
t
a
s
k
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
7
0
2
0
'
,
 
$
t
a
s
k
)
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
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
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
e
v
e
n
t
S
p
e
c
i
f
i
c
l
y
E
x
i
s
t
s
C
h
e
c
k
(
'
0
7
0
3
0
'
,
 
$
t
a
s
k
)
)
 
{

 
 
 
 
 
 
 
 
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
7
0
3
0
'
,
 
$
t
a
s
k
)
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
 
a
r
r
a
y
(
)
;

 
 
 
 
}

}


/
*
*

 
*
 
G
i
v
e
n
 
a
 
r
e
g
i
o
n
 
i
d
,
 
w
i
l
l
 
r
e
t
u
r
n
 
t
h
e
 
n
a
m
e
 
o
f
 
t
h
e
 
r
e
g
i
o
n
,
 
t
r
a
n
s
l
a
t
e
d
 
i
f
 
a
p
p
l
i
c
a
b
l
e
.

 
*
/

f
u
n
c
t
i
o
n
 
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
(
$
r
e
g
i
o
n
_
i
d
)

{

 
 
 
 
i
f
 
(
!
i
s
_
n
u
m
e
r
i
c
(
$
r
e
g
i
o
n
_
i
d
)
)
 
{
 
/
/
 
I
t
'
s
 
a
l
r
e
a
d
y
 
N
O
T
 
n
u
m
e
r
i
c

	
	
r
e
t
u
r
n
 
$
r
e
g
i
o
n
_
i
d
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
e
g
i
o
n
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
e
g
i
o
n
s
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
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
n
a
m
e
(
$
r
e
g
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
*
*

 
*
 
G
i
v
e
n
 
a
 
r
e
g
i
o
n
 
n
a
m
e
,
 
w
i
l
l
 
r
e
t
u
r
n
 
t
h
e
 
r
e
g
i
o
n
 
i
d
.
 

 
*
/

f
u
n
c
t
i
o
n
 
f
i
n
d
_
r
e
g
i
o
n
_
i
d
(
$
r
e
g
i
o
n
_
n
a
m
e
)

{

 
 
 
 
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
r
e
g
i
o
n
_
n
a
m
e
)
)
 
{
 
/
/
 
I
t
'
s
 
a
l
r
e
a
d
y
 
n
u
m
e
r
i
c

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
g
i
o
n
_
n
a
m
e
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
e
g
i
o
n
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
e
g
i
o
n
s
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
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
i
d
(
$
r
e
g
i
o
n
_
n
a
m
e
)
;

}


/
*
*

 
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
 
a
r
r
a
y
 
o
f
 
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
 
w
i
t
h
 
a
 
m
a
n
a
g
e
r
 
i
d

 
*
/

f
u
n
c
t
i
o
n
 
b
u
i
l
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
_
m
a
n
a
g
e
r
_
x
r
e
f
_
a
r
r
a
y
(
)

{

 
 
 
 
$
a
r
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
m
a
n
a
g
e
r
_
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
j
o
m
r
e
s
_
m
a
n
a
g
e
r
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
_
x
r
e
f
'
;

	
$
m
a
n
a
g
e
r
s
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
m
a
n
a
g
e
r
s
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
m
a
n
a
g
e
r
s
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
L
i
s
t
 
a
s
 
$
x
)
 
{

	
	
	
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
x
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
,
 
$
a
r
r
)
)
 
{

	
	
	
	
$
a
r
r
[
 
$
x
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
 
]
 
=
 
$
x
-
>
m
a
n
a
g
e
r
_
i
d
;

	
	
	
}

	
	
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
n
a
g
e
r
_
x
r
e
f
'
,
 
$
a
r
r
)
;


 
 
 
 
r
e
t
u
r
n
 
$
a
r
r
;

}


/
*
*

 
*
 
U
t
i
l
i
t
y
 
t
o
 
p
r
o
d
u
c
e
 
a
 
u
r
l
 
t
h
e
 
v
i
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
 
m
a
n
a
g
e
r
 
p
a
g
e

 
*
/

f
u
n
c
t
i
o
n
 
m
a
k
e
_
a
g
e
n
t
_
l
i
n
k
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
i
d
 
=
 
0
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
m
a
n
a
g
e
r
_
x
r
e
f
 
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
n
a
g
e
r
_
x
r
e
f
'
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
n
a
g
e
r
_
x
r
e
f
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
m
a
n
a
g
e
r
_
x
r
e
f
 
=
 
b
u
i
l
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
_
m
a
n
a
g
e
r
_
x
r
e
f
_
a
r
r
a
y
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
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
i
d
,
 
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
m
a
n
a
g
e
r
_
x
r
e
f
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
}


 
 
 
 
i
f
 
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
'
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
m
a
n
a
g
e
r
_
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
m
a
n
a
g
e
r
_
x
r
e
f
[
 
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
i
d
 
]
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
I
M
A
G
E
'
 
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
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
n
o
i
m
a
g
e
.
g
i
f
'
;

 
 
 
 
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
_
I
M
A
G
E
L
O
C
A
T
I
O
N
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
u
s
e
r
i
m
a
g
e
s
'
.
J
R
D
S
.
'
u
s
e
r
i
m
a
g
e
_
'
.
(
i
n
t
)
 
$
m
a
n
a
g
e
r
_
i
d
.
'
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
I
M
A
G
E
'
 
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
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
u
s
e
r
i
m
a
g
e
s
/
u
s
e
r
i
m
a
g
e
_
'
.
(
i
n
t
)
 
$
m
a
n
a
g
e
r
_
i
d
.
'
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
;

 
 
 
 
}


 
 
 
 
$
o
u
t
p
u
t
[
 
'
U
R
L
'
 
]
 
=
 
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
.
'
&
t
a
s
k
=
v
i
e
w
_
a
g
e
n
t
&
i
d
=
'
.
$
m
a
n
a
g
e
r
_
i
d
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
F
R
O
N
T
E
N
D
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
a
g
e
n
t
_
l
i
n
k
.
h
t
m
l
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


/
*
*

 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
a
 
u
s
e
r
 
c
a
n
 
p
e
r
f
o
r
m
 
t
h
e
 
t
r
a
n
s
l
a
t
i
o
n

 
*
/

f
u
n
c
t
i
o
n
 
t
r
a
n
s
l
a
t
i
o
n
_
u
s
e
r
_
c
h
e
c
k
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
 
|
|
 
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
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
N
O
T
A
M
A
N
A
G
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
N
O
T
A
M
A
N
A
G
E
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
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
c
l
a
s
s
=
"
u
i
-
s
t
a
t
e
-
e
r
r
o
r
"
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
N
O
T
A
M
A
N
A
G
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
N
O
T
A
M
A
N
A
G
E
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
<
/
d
i
v
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
 
f
a
l
s
e
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


/
*
*

 
*
 
O
u
t
p
u
t
s
 
t
h
e
 
"
n
o
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
"
 
m
e
s
s
a
g
e

 
*
/

f
u
n
c
t
i
o
n
 
n
o
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
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
0
'
,
 
'
n
o
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
'
)
;

}


/
*
*

 
*
 
R
e
t
u
r
n
s
 
a
 
t
o
o
l
t
i
p
 
i
m
a
g
e
 
(
 
i
m
a
g
e
 
w
i
t
h
 
h
o
v
e
r
 
t
e
s
t
 
)
.
 
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
t
i
p
s
 
c
l
a
s
s
 
u
s
e
d
 
t
o
 
d
e
t
e
r
m
i
n
e
 
w
h
a
t
 
t
o
 
s
h
o
w
 
b
a
s
e
d
 
o
n
 
t
h
e
 
v
e
r
s
i
o
n
 
o
f
 
b
o
o
t
s
t
r
a
p
 

 
*
/

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
m
a
k
e
T
o
o
l
t
i
p
(
$
d
i
v
,
 
$
h
o
v
e
r
_
t
i
t
l
e
 
=
 
'
'
,
 
$
h
o
v
e
r
_
c
o
n
t
e
n
t
 
=
 
'
'
,
 
$
d
i
v
_
c
o
n
t
e
n
t
 
=
 
'
'
,
 
$
c
l
a
s
s
 
=
 
'
'
,
 
$
t
y
p
e
 
=
 
'
'
,
 
$
t
y
p
e
_
a
r
g
u
m
e
n
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
,
 
$
u
r
l
 
=
 
'
#
'
)

{

 
 
 
 
/
/
 
U
n
c
o
m
m
e
n
t
 
t
h
e
 
f
o
l
l
o
w
i
n
g
 
l
i
n
e
 
t
o
 
t
e
l
l
 
J
o
m
r
e
s
 
t
o
 
s
h
o
w
 
t
h
e
 
i
m
a
g
e
s
 
a
n
d
 
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
s
 
s
i
d
e
 
b
y
 
s
i
d
e
,
 
i
n
s
t
e
a
d
 
o
f
 
u
s
i
n
g
 
t
h
e
 
j
q
u
e
r
y
 
t
o
o
l
t
i
p
.

 
 
 
 
/
/
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
'
u
s
e
_
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
]
=
f
a
l
s
e
;

 
 
 
 
$
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
t
i
p
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
t
o
o
l
t
i
p
s
'
)
;


 
 
 
 
/
/
$
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
t
i
p
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
t
o
o
l
t
i
p
s
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
t
i
p
s
-
>
g
e
n
e
r
a
t
e
_
t
o
o
l
t
i
p
(
$
d
i
v
,
 
$
h
o
v
e
r
_
t
i
t
l
e
,
 
$
h
o
v
e
r
_
c
o
n
t
e
n
t
,
 
$
d
i
v
_
c
o
n
t
e
n
t
,
 
$
c
l
a
s
s
,
 
$
t
y
p
e
,
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
,
 
$
u
r
l
)
;

}


/
*
*

 
*
 
O
p
t
i
o
n
a
l
 
C
M
S
 
S
p
e
c
i
f
i
c
 
e
n
d
 
r
u
n
 
t
a
s
k
s

 
*
/

f
u
n
c
t
i
o
n
 
e
n
d
r
u
n
(
)

{

 
 
 
 
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
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
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
n
d
r
u
n
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
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
n
d
r
u
n
.
p
h
p
'
;

 
 
 
 
}

}


/
*
*

 
*
 
R
e
t
u
r
n
s
 
w
h
e
t
h
e
r
 
o
r
 
n
o
t
 
w
e
 
a
r
e
 
u
s
i
n
g
 
B
o
o
t
s
t
r
a
p

 
*
/

f
u
n
c
t
i
o
n
 
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
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
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
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
 
=
=
 
'
1
'
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
*
*

 
*
 
A
d
d
s
 
G
o
o
g
l
e
 
m
a
p
s
 
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
 
c
a
l
l
s
 
t
o
 
t
h
e
 
s
i
t
e
'
s
 
h
e
a
d
 
w
h
e
r
e
 
a
p
p
r
o
p
r
i
a
t
e

 
*
/

f
u
n
c
t
i
o
n
 
a
d
d
_
g
m
a
p
s
_
s
o
u
r
c
e
(
)

{

 
 
 
 
i
f
 
(
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
_
N
O
H
T
M
L
'
)
 
&
&
 
J
O
M
R
E
S
_
N
O
H
T
M
L
 
=
=
 
'
1
'
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
G
M
A
P
S
_
S
O
U
R
C
E
_
A
D
D
E
D
'
)
 
&
&
 
!
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
G
M
A
P
S
_
S
O
U
R
C
E
_
A
D
D
E
D
'
,
 
1
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
s
h
o
r
t
c
o
d
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
l
a
n
g
_
s
h
o
r
t
c
o
d
e
'
)
;


 
 
 
 
 
 
 
 
$
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
g
o
o
g
l
e
_
m
a
p
s
_
a
p
i
_
k
e
y
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
i
k
e
y
 
=
 
'
&
k
e
y
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
g
o
o
g
l
e
_
m
a
p
s
_
a
p
i
_
k
e
y
'
 
]
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
 
'
h
t
t
p
s
:
/
/
m
a
p
s
.
g
o
o
g
l
e
a
p
i
s
.
c
o
m
/
m
a
p
s
/
a
p
i
/
j
s
?
v
=
3
&
l
a
n
g
u
a
g
e
=
'
.
$
s
h
o
r
t
c
o
d
e
.
$
a
p
i
k
e
y
,
 
'
&
f
o
o
=
b
a
r
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
 
f
a
l
s
e
,
 
$
a
s
y
n
c
 
=
 
t
r
u
e
)
;

 
 
 
 
}

}


/
*
*

 
*
 
N
o
t
 
c
u
r
r
e
n
t
l
y
 
u
s
e
d

 
*
/

f
u
n
c
t
i
o
n
 
a
d
m
i
n
s
_
f
i
r
s
t
_
r
u
n
(
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
 
=
 
f
a
l
s
e
)

{

 
 
 
 
$
l
o
g
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
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
.
'
a
d
m
i
n
s
_
f
i
r
s
t
_
r
u
n
.
t
x
t
'
;

 
 
 
 
$
t
h
r
e
s
h
o
l
d
 
=
 
2
5
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
l
o
g
f
i
l
e
)
 
|
|
 
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
o
u
c
h
(
$
l
o
g
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
 
=
 
0
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
 
c
l
a
s
s
=
"
m
o
d
a
l
"
 
t
a
b
i
n
d
e
x
=
"
-
1
"
 
r
o
l
e
=
"
d
i
a
l
o
g
"
 
i
d
=
"
f
i
r
s
t
_
r
u
n
"
 
s
t
y
l
e
=
"
d
i
s
p
l
a
y
:
n
o
n
e
"
 
t
i
t
l
e
=
"
W
e
l
c
o
m
e
 
t
o
 
J
o
m
r
e
s
,
 
J
o
o
m
l
a
\
'
s
 
f
a
v
o
u
r
i
t
e
 
h
o
t
e
l
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
"
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
c
l
a
s
s
=
"
m
o
d
a
l
-
h
e
a
d
e
r
"
>
<
b
u
t
t
o
n
 
t
y
p
e
=
"
b
u
t
t
o
n
"
 
c
l
a
s
s
=
"
c
l
o
s
e
"
 
d
a
t
a
-
d
i
s
m
i
s
s
=
"
m
o
d
a
l
"
 
a
r
i
a
-
h
i
d
d
e
n
=
"
t
r
u
e
"
>
&
t
i
m
e
s
;
<
/
b
u
t
t
o
n
>
<
h
3
>
G
e
t
t
i
n
g
 
S
t
a
r
t
e
d
 
w
i
t
h
 
J
o
m
r
e
s
<
/
h
3
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
3
>
G
e
t
t
i
n
g
 
S
t
a
r
t
e
d
 
w
i
t
h
 
J
o
m
r
e
s
<
/
h
3
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
i
d
 
=
 
"
f
i
r
s
t
_
r
u
n
"
 
t
i
t
l
e
=
"
W
e
l
c
o
m
e
 
t
o
 
J
o
m
r
e
s
,
 
J
o
o
m
l
a
\
'
s
 
f
a
v
o
u
r
i
t
e
 
h
o
t
e
l
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
"
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
l
a
s
s
 
=
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
 
=
 
'
a
l
e
r
t
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
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
'
.
$
c
l
a
s
s
.
'
"
>
T
h
i
s
 
a
p
p
e
a
r
s
 
t
o
 
b
e
 
t
h
e
 
f
i
r
s
t
 
t
i
m
e
 
y
o
u
\
'
v
e
 
u
s
e
d
 
J
o
m
r
e
s
*
 
s
o
 
h
e
r
e
 
i
s
 
a
 
l
i
t
t
l
e
 
r
e
a
d
i
n
g
 
m
a
t
e
r
i
a
l
 
y
o
u
 
w
i
l
l
 
p
r
o
b
a
b
l
y
 
w
a
n
t
 
t
o
 
l
o
o
k
 
a
t
.
<
/
p
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
l
a
s
s
 
=
 
'
u
i
-
w
i
d
g
e
t
-
c
o
n
t
e
n
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
y
l
e
 
=
 
'
m
a
r
g
i
n
-
l
e
f
t
:
5
p
x
;
m
a
r
g
i
n
-
r
i
g
h
t
:
5
p
x
;
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
y
l
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'

	
	
<
d
i
v
 
c
l
a
s
s
=
"
m
o
d
a
l
-
b
o
d
y
"
>

	
	
<
d
i
v
 
c
l
a
s
s
=
"
'
 
.
$
c
l
a
s
s
.
'
"
 
s
t
y
l
e
=
"
w
i
d
t
h
:
1
0
0
%
;
"
>

	
	
<
d
i
v
 
s
t
y
l
e
=
"
'
 
.
$
s
t
y
l
e
.
'
"
>

	
	
<
h
3
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
I
n
t
r
o
d
u
c
t
i
o
n
.
<
/
h
3
>

	
	
<
p
>
F
i
r
s
t
l
y
,
 
a
 
b
a
s
i
c
 
i
n
s
t
a
l
l
a
t
i
o
n
 
o
f
 
J
o
m
r
e
s
,
 
w
i
t
h
 
a
b
s
o
l
u
t
e
l
y
 
n
o
 
p
l
u
g
i
n
s
,
 
i
s
 
a
 
w
o
r
k
i
n
g
 
b
o
o
k
i
n
g
 
e
x
t
e
n
s
i
o
n
 
f
o
r
 
J
o
o
m
l
a
 
a
n
d
 
W
o
r
d
p
r
e
s
s
.
 
W
h
i
l
s
t
 
t
h
i
s
 
i
s
 
s
u
f
f
i
c
i
e
n
t
 
f
o
r
 
a
 
s
m
a
l
l
 
s
i
t
e
 
w
i
t
h
 
j
u
s
t
 
o
n
e
 
p
r
o
p
e
r
t
y
 
y
o
u
 
m
a
y
 
q
u
i
c
k
l
y
 
f
i
n
d
 
t
h
a
t
 
y
o
u
 
w
a
n
t
 
t
o
 
a
d
d
 
m
o
r
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
l
i
t
y
 
a
n
d
 
f
e
a
t
u
r
e
s
 
t
o
 
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
 
t
a
k
i
n
g
 
i
t
 
f
r
o
m
 
a
 
s
i
m
p
l
e
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
 
t
o
 
a
 
f
u
l
l
 
o
n
l
i
n
e
 
b
o
o
k
i
n
g
 
p
o
r
t
a
l
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
g
a
i
n
 
r
e
v
e
n
u
e
 
f
r
o
m
 
l
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
i
e
s
 
o
n
 
y
o
u
r
 
s
i
t
e
,
 
e
a
r
n
i
n
g
 
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
,
 
o
r
 
t
a
k
i
n
g
 
b
o
o
k
i
n
g
 
d
e
p
o
s
i
t
s
 
o
n
l
i
n
e
.
<
/
p
>

	
	
<
p
>
U
n
l
e
s
s
 
y
o
u
 
w
a
n
t
 
t
o
 
b
u
i
l
d
 
t
h
e
 
c
o
d
e
 
y
o
u
r
s
e
l
f
,
 
t
h
e
 
b
e
s
t
 
s
o
u
r
c
e
 
o
f
 
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
 
i
s
 
u
s
u
a
l
l
y
 
t
h
e
 
<
a
 
h
r
e
f
=
"
'
 
.
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
h
o
w
p
l
u
g
i
n
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
J
o
m
r
e
s
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
.
<
/
a
>
 
W
e
 
h
a
v
e
 
o
v
e
r
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
1
0
0
 
p
l
u
g
i
n
s
 
a
v
a
i
l
a
b
l
e
<
/
a
>
 
t
h
a
t
 
e
x
t
e
n
d
 
t
h
e
 
s
y
s
t
e
m
 
a
n
d
 
w
e
\
'
v
e
 
w
o
r
k
e
d
 
h
a
r
d
 
t
o
 
m
a
k
e
 
t
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
e
x
t
r
e
m
e
l
y
 
e
a
s
y
 
t
o
 
u
s
e
.
 
I
f
 
y
o
u
 
h
a
v
e
 
a
 
<
a
 
h
r
e
f
=
"
h
t
t
p
s
:
/
/
w
w
w
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
p
r
i
c
i
n
g
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
 
d
o
w
n
l
o
a
d
 
a
n
d
 
s
u
p
p
o
r
t
 
k
e
y
<
/
a
>
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
d
o
w
n
l
o
a
d
 
a
n
y
 
p
l
u
g
i
n
s
 
l
i
s
t
e
d
 
i
n
 
t
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
,
 
o
n
c
e
 
y
o
u
 
h
a
v
e
 
e
n
t
e
r
e
d
 
y
o
u
r
 
l
i
c
e
n
s
e
 
n
u
m
b
e
r
 
i
n
 
t
h
e
 
S
u
p
p
o
r
t
 
K
e
y
 
f
i
e
l
d
 
i
n
 
<
a
 
h
r
e
f
=
"
'
.
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
i
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
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
.
<
/
a
>
<
/
p
>

	
	
<
h
3
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
F
i
r
s
t
 
s
t
e
p
s
.
<
/
h
3
>

	
	
<
p
>
N
o
w
 
t
h
a
t
 
y
o
u
\
'
v
e
 
s
e
e
n
 
s
o
m
e
 
o
f
 
t
h
e
 
e
x
t
r
a
 
f
e
a
t
u
r
e
s
 
o
n
 
o
f
f
e
r
,
 
y
o
u
 
a
r
e
 
r
e
a
d
y
 
t
o
 
s
t
a
r
t
 
s
e
t
t
i
n
g
 
u
p
 
y
o
u
r
 
s
i
t
e
.
 
T
o
 
b
e
g
i
n
 
w
i
t
h
,
 
w
e
\
'
d
 
l
i
k
e
 
y
o
u
 
t
o
 
i
g
n
o
r
e
 
t
h
e
 
"
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
"
 
a
r
e
a
 
o
f
 
J
o
m
r
e
s
 
a
l
t
o
g
e
t
h
e
r
 
f
o
r
 
t
h
e
 
t
i
m
e
 
b
e
i
n
g
,
 
a
 
n
e
w
 
i
n
s
t
a
l
l
a
t
i
o
n
 
o
f
 
J
o
m
r
e
s
 
i
n
c
l
u
d
e
s
 
s
a
m
p
l
e
 
d
a
t
a
 
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
 
p
l
a
y
 
a
r
o
u
n
d
 
w
i
t
h
 
l
a
t
e
r
,
 
b
u
t
 
f
o
r
 
n
o
w
 
y
o
u
 
s
h
o
u
l
d
 
e
x
p
e
r
i
m
e
n
t
 
w
i
t
h
 
c
o
n
f
i
g
u
r
i
n
g
 
y
o
u
r
 
d
e
f
a
u
l
t
 
p
r
o
p
e
r
t
y
.

	
	
<
o
l
>

	
	
	
<
l
i
>
W
h
e
n
 
J
o
m
r
e
s
 
i
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
,
 
t
h
e
 
f
i
r
s
t
 
t
h
i
n
g
 
i
t
 
d
o
e
s
 
i
s
 
c
o
n
f
i
g
u
r
e
 
y
o
u
r
 
"
a
d
m
i
n
"
 
u
s
e
r
 
t
o
 
b
e
 
a
 
S
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
.
 
S
u
p
e
r
 
M
a
n
a
g
e
r
s
 
a
r
e
 
a
k
i
n
 
t
o
 
a
 
R
o
o
t
 
u
s
e
r
 
i
n
 
l
i
n
u
x
,
 
w
i
t
h
 
s
u
p
e
r
 
p
o
w
e
r
s
 
u
n
a
v
a
i
l
a
b
l
e
 
t
o
 
n
o
r
m
a
l
 
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
s
.
 
I
f
 
y
o
u
r
 
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
 
u
s
e
r
 
i
s
 
a
 
d
i
f
f
e
r
e
n
t
 
u
s
e
r
 
y
o
u
 
m
i
g
h
t
 
n
e
e
d
 
t
o
 
a
d
d
 
t
h
e
m
 
a
s
 
a
 
S
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
 
v
i
a
 
t
h
e
 
<
a
 
h
r
e
f
=
"
'
 
.
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
l
i
s
t
_
u
s
e
r
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
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
s
<
/
a
>
 
p
a
g
e
.
 
V
i
e
w
 
i
t
 
n
o
w
 
j
u
s
t
 
t
o
 
c
h
e
c
k
 
t
h
a
t
 
y
o
u
r
 
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
 
u
s
e
r
 
h
a
s
 
a
 
p
u
r
p
l
e
 
b
a
d
g
e
.
 
I
f
 
t
h
e
y
 
h
a
v
e
n
\
'
t
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
e
d
i
t
 
t
h
e
i
r
 
r
e
c
o
r
d
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
y
 
a
r
e
 
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
s
 
b
e
f
o
r
e
 
y
o
u
 
l
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
o
f
 
y
o
u
r
 
s
i
t
e
.
 
N
o
t
e
 
:
 
S
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
d
o
 
n
o
t
 
n
e
e
d
 
t
o
 
b
e
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
a
 
s
p
e
c
i
f
i
c
 
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
y
 
h
a
v
e
 
a
c
c
e
s
s
 
t
o
 
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
.
<
/
l
i
>

	
	
	
'
;

 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
l
i
>
N
e
x
t
,
 
a
d
d
 
J
o
m
r
e
s
 
t
o
 
y
o
u
r
 
<
a
 
h
r
e
f
=
"
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
m
e
n
u
s
&
v
i
e
w
=
i
t
e
m
s
&
m
e
n
u
t
y
p
e
=
m
a
i
n
m
e
n
u
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
 
M
a
i
n
 
M
e
n
u
<
/
a
>
,
 
a
s
 
y
o
u
 
w
o
u
l
d
 
a
n
y
 
o
t
h
e
r
 
J
o
o
m
l
a
 
e
x
t
e
n
s
i
o
n
.
<
/
l
i
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
l
i
>
N
o
w
 
g
o
 
t
o
 
t
h
e
 
<
a
 
h
r
e
f
=
"
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
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
p
u
b
l
i
c
 
p
a
g
e
s
<
/
a
>
 
o
f
 
y
o
u
r
 
s
i
t
e
 
a
n
d
 
l
o
g
 
i
n
 
a
s
 
y
o
u
r
 
a
d
m
i
n
 
u
s
e
r
.
 
W
h
e
n
 
y
o
u
 
c
l
i
c
k
 
o
n
 
t
h
e
 
<
a
 
h
r
e
f
=
"
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
j
o
m
r
e
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
M
a
i
n
 
M
e
n
u
 
l
i
n
k
 
t
o
 
J
o
m
r
e
s
<
/
a
>
,
 
a
s
 
y
o
u
 
a
r
e
 
l
o
g
g
e
d
 
i
n
,
 
y
o
u
 
w
i
l
l
 
s
e
e
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
p
r
o
p
e
r
t
y
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
3
8
-
y
o
u
r
-
t
o
o
l
b
a
r
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
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
\
'
s
 
t
o
o
l
b
a
r
<
/
a
>
.
 
G
o
 
t
o
 
t
h
e
 
b
u
t
t
o
n
 
m
a
r
k
e
d
 
"
T
a
r
i
f
f
s
 
&
 
R
o
o
m
s
"
 
(
u
n
d
e
r
 
S
e
t
t
i
n
g
s
)
 
a
n
d
 
c
l
i
c
k
 
o
n
 
i
t
.
<
/
l
i
>
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
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
l
i
>
N
o
w
 
y
o
u
 
w
a
n
t
 
t
o
 
m
a
k
e
 
s
u
r
e
 
t
h
a
t
 
J
o
m
r
e
s
 
p
a
g
e
s
 
a
r
e
 
v
i
s
i
b
l
e
 
t
o
 
s
i
t
e
 
v
i
s
i
t
o
r
s
,
 
s
o
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
a
d
d
 
t
h
e
 
<
i
>
[
j
o
m
r
e
s
:
e
n
-
U
S
]
<
/
i
>
 
s
h
o
r
t
c
o
d
e
 
t
o
 
a
 
n
e
w
 
p
a
g
e
 
t
o
 
d
i
s
p
l
a
y
 
y
o
u
r
 
J
o
m
r
e
s
 
p
a
g
e
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
 
o
f
 
W
o
r
d
p
r
e
s
s
,
 
i
f
 
u
s
i
n
g
 
E
n
g
l
i
s
h
,
 
f
o
r
 
o
t
h
e
r
 
l
a
n
g
u
a
g
e
s
 
a
d
d
 
[
j
o
m
r
e
s
:
x
x
-
X
X
]
 
w
h
e
r
e
 
x
x
-
X
X
 
i
s
 
t
h
e
 
s
h
o
r
t
c
o
d
e
 
f
o
r
 
y
o
u
r
 
c
h
o
s
e
n
 
l
a
n
g
u
a
g
e
.
<
/
l
i
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
l
i
>
N
o
w
 
g
o
 
t
o
 
t
h
e
 
<
a
 
h
r
e
f
=
"
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
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
p
u
b
l
i
c
 
p
a
g
e
s
<
/
a
>
 
o
f
 
y
o
u
r
 
s
i
t
e
 
a
n
d
 
l
o
g
 
i
n
 
a
s
 
"
a
d
m
i
n
"
.
 
W
h
e
n
 
y
o
u
 
v
i
s
i
t
 
t
h
e
 
p
o
s
t
 
y
o
u
 
a
d
d
e
d
 
t
h
e
 
s
h
o
r
t
c
o
d
e
 
t
o
,
 
a
s
 
y
o
u
 
a
r
e
 
l
o
g
g
e
d
 
i
n
,
 
y
o
u
 
w
i
l
l
 
s
e
e
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
p
r
o
p
e
r
t
y
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
3
8
-
y
o
u
r
-
t
o
o
l
b
a
r
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
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
\
'
s
 
t
o
o
l
b
a
r
<
/
a
>
.
 
G
o
 
t
o
 
t
h
e
 
b
u
t
t
o
n
 
m
a
r
k
e
d
 
"
T
a
r
i
f
f
s
 
&
 
R
o
o
m
s
"
 
(
u
n
d
e
r
 
S
e
t
t
i
n
g
s
)
 
a
n
d
 
c
l
i
c
k
 
o
n
 
i
t
.
<
/
l
i
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
l
i
>
H
e
r
e
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
a
n
d
 
t
h
e
i
r
 
p
r
i
c
e
s
.
 
F
o
r
 
n
o
w
,
 
d
o
n
\
'
t
 
m
a
k
e
 
a
n
y
 
c
h
a
n
g
e
s
,
 
j
u
s
t
 
c
l
i
c
k
 
t
h
e
 
S
a
v
e
 
i
c
o
n
.
 
N
o
w
 
y
o
u
 
a
r
e
 
r
e
a
d
y
 
t
o
 
p
l
a
y
 
a
r
o
u
n
d
 
w
i
t
h
 
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
 
f
o
r
m
 
a
n
d
 
g
e
n
e
r
a
l
l
y
 
g
e
t
 
u
s
e
d
 
t
o
 
u
s
i
n
g
 
J
o
m
r
e
s
.
<
/
l
i
>

	
	
<
/
o
l
>

	
	
<
/
p
>

	
	
<
h
3
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
F
u
r
t
h
e
r
 
r
e
a
d
i
n
g
.
<
/
h
3
>

	
	
<
p
>
J
o
m
r
e
s
 
i
s
 
f
u
l
l
y
 
d
o
c
u
m
e
n
t
e
d
 
i
n
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
o
n
l
i
n
e
 
m
a
n
u
a
l
<
/
a
>
.
 
T
h
e
r
e
 
i
s
 
a
 
w
e
a
l
t
h
 
o
f
 
i
n
f
o
r
m
a
t
i
o
n
 
h
e
r
e
,
 
i
n
c
l
u
d
i
n
g
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
1
5
-
c
o
r
e
-
p
l
u
g
i
n
s
"
 
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
p
l
u
g
i
n
 
l
i
s
t
<
/
a
>
,
 
b
u
t
 
a
 
g
o
o
d
 
p
l
a
c
e
 
t
o
 
b
e
g
i
n
 
a
t
 
i
s
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
1
4
-
g
e
t
t
i
n
g
-
s
t
a
r
t
e
d
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
G
e
t
t
i
n
g
 
S
t
a
r
t
e
d
<
/
a
>
 
p
a
g
e
.
<
/
p
>

	
	
<
p
>
T
o
 
l
e
a
r
n
 
h
o
w
 
t
o
 
c
o
n
f
i
g
u
r
e
 
y
o
u
r
 
p
r
o
p
e
r
t
y
(
s
)
 
y
o
u
 
s
h
o
u
l
d
 
t
a
k
e
 
a
 
l
o
o
k
 
a
t
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
p
r
o
p
e
r
t
y
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
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
\
'
s
 
g
u
i
d
e
.
<
/
a
>
 
T
h
i
s
 
s
e
c
t
i
o
n
 
o
f
 
t
h
e
 
m
a
n
u
a
l
 
i
s
 
a
i
m
e
d
 
a
t
 
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
s
 
t
h
e
m
s
e
l
v
e
s
,
 
a
n
d
 
d
i
s
c
u
s
s
e
s
 
a
m
o
n
g
 
o
t
h
e
r
 
t
h
i
n
g
s
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
p
r
o
p
e
r
t
y
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
3
8
-
y
o
u
r
-
t
o
o
l
b
a
r
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
M
a
n
a
g
e
r
\
'
s
 
T
o
o
l
b
a
r
.
<
/
a
>
 
N
o
t
e
 
t
h
a
t
 
t
h
e
 
t
o
o
l
b
a
r
 
s
h
o
w
s
 
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
\
'
s
 
t
o
o
l
b
a
r
 
w
i
t
h
 
a
l
l
 
o
f
 
t
h
e
 
m
o
s
t
 
c
o
m
m
o
n
l
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
 
p
l
u
g
i
n
\
'
s
 
b
u
t
t
o
n
s
,
 
u
n
t
i
l
 
y
o
u
\
'
v
e
 
i
n
s
t
a
l
l
e
d
 
t
h
e
 
r
e
l
e
v
a
n
t
 
p
l
u
g
i
n
s
 
y
o
u
r
 
t
o
o
l
b
a
r
 
w
i
l
l
 
n
o
t
 
h
a
v
e
 
a
s
 
m
a
n
y
 
i
c
o
n
s
.
<
/
p
>

	
	
<
/
d
i
v
>
<
/
d
i
v
>
<
/
d
i
v
>

	
	
'
;


 
 
 
 
 
 
 
 
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
c
l
a
s
s
 
=
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
 
=
 
'
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
i
n
f
o
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
 
<
d
i
v
 
c
l
a
s
s
=
"
'
.
$
c
l
a
s
s
.
'
"
>
I
f
 
y
o
u
\
'
v
e
 
u
s
e
d
 
J
o
m
r
e
s
 
b
e
f
o
r
e
 
o
r
 
a
r
e
 
h
a
p
p
y
 
e
x
p
l
o
r
i
n
g
 
t
h
e
 
m
a
n
u
a
l
 
o
n
 
y
o
u
r
 
o
w
n
 
j
u
s
t
 
c
l
i
c
k
 
t
h
e
 
b
i
g
 
X
 
a
t
 
t
h
e
 
t
o
p
 
r
i
g
h
t
 
o
f
 
t
h
i
s
 
p
o
p
u
p
 
a
n
d
 
w
e
 
w
o
n
\
'
t
 
b
o
t
h
e
r
 
y
o
u
 
a
g
a
i
n
.
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
/
d
i
v
>

	
	
'
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
s
c
r
i
p
t
>
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
(
)
 
{
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
f
i
r
s
t
_
r
u
n
\
'
)
.
m
o
d
a
l
(
)
}
)
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
s
c
r
i
p
t
>
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
#
f
i
r
s
t
_
r
u
n
"
 
)
.
d
i
a
l
o
g
(
{
w
i
d
t
h
:
1
0
2
4
,
m
o
d
a
l
:
t
r
u
e
}
)
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
/
/
 
e
l
s
e

 
 
 
 
/
/
 
{

 
 
 
 
/
/
 
$
c
o
u
n
t
 
=
 
(
i
n
t
)
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
l
o
g
f
i
l
e
)
;


 
 
 
 
/
/
 
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

 
 
 
 
/
/
 
$
c
l
a
s
s
 
=
 
"
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
"
;

 
 
 
 
/
/
 
e
l
s
e

 
 
 
 
/
/
 
$
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
i
n
f
o
"
;


 
 
 
 
/
/
 
i
f
 
(
$
c
o
u
n
t
 
=
=
 
$
t
h
r
e
s
h
o
l
d
)

 
 
 
 
/
/
 
{

 
 
 
 
/
/
 
e
c
h
o
 
'
<
d
i
v
 
i
d
 
=
 
"
j
e
d
"
 
s
t
y
l
e
=
"
d
i
s
p
l
a
y
:
n
o
n
e
;
"
 
t
i
t
l
e
=
"
R
e
v
i
e
w
 
J
o
m
r
e
s
 
o
n
 
t
h
e
 
J
o
o
m
l
a
 
E
x
t
e
n
s
i
o
n
 
D
i
r
e
c
t
o
r
y
"
>
'
;

 
 
 
 
/
/
 
e
c
h
o
 
'
<
p
>
P
l
e
a
s
e
 
r
e
m
e
m
b
e
r
 
t
o
 
p
o
s
t
 
a
 
r
e
v
i
e
w
 
a
b
o
u
t
 
J
o
m
r
e
s
 
o
n
 
t
h
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
e
x
t
e
n
s
i
o
n
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
e
x
t
e
n
s
i
o
n
s
/
v
e
r
t
i
c
a
l
-
m
a
r
k
e
t
s
/
b
o
o
k
i
n
g
-
a
-
r
e
s
e
r
v
a
t
i
o
n
s
/
b
o
o
k
i
n
g
/
3
3
5
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
J
o
o
m
l
a
 
E
x
t
e
n
s
i
o
n
 
D
i
r
e
c
t
o
r
y
.
<
/
a
>
 
T
h
e
 
J
E
D
 
i
s
 
o
u
r
 
p
r
i
m
a
r
y
 
s
o
u
r
c
e
 
o
f
 
b
u
s
i
n
e
s
s
 
a
n
d
 
w
e
 
n
e
e
d
 
y
o
u
r
 
r
e
v
i
e
w
!
<
/
p
>
'
;

 
 
 
 
/
/
 
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
'
.
$
c
l
a
s
s
.
'
"
>
T
h
i
s
 
i
s
 
t
h
e
 
o
n
e
 
a
n
d
 
o
n
l
y
 
t
i
m
e
 
y
o
u
 
w
i
l
l
 
s
e
e
 
t
h
i
s
 
f
e
e
d
b
a
c
k
 
r
e
q
u
e
s
t
 
(
u
n
l
e
s
s
 
y
o
u
 
d
e
l
e
t
e
 
<
i
>
"
'
.
$
l
o
g
f
i
l
e
.
'
"
<
/
i
>
)
.
<
/
p
>
'
;

 
 
 
 
/
/
 
e
c
h
o
 
'
<
/
d
i
v
>
'
;

 
 
 
 
/
/
 
e
c
h
o
 
'
<
s
c
r
i
p
t
>
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
#
j
e
d
"
 
)
.
d
i
a
l
o
g
(
{
w
i
d
t
h
:
5
0
0
,
m
o
d
a
l
:
t
r
u
e
}
)
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
'
;


 
 
 
 
/
/
 
}

 
 
 
 
/
/
 
}


 
 
 
 
/
/
 
i
f
 
(
$
c
o
u
n
t
 
<
=
 
$
t
h
r
e
s
h
o
l
d
 
&
&
 
!
$
m
a
n
u
a
l
_
t
r
i
g
g
e
r
 
&
&
 
!
i
s
s
e
t
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
[
'
n
o
_
h
t
m
l
'
]
)
 
)

 
 
 
 
/
/
 
{

 
 
 
 
/
/
 
$
c
o
u
n
t
+
+
;

 
 
 
 
/
/
 
$
f
p
=
f
o
p
e
n
(
$
l
o
g
f
i
l
e
,
'
r
+
'
)
;

 
 
 
 
/
/
 
f
w
r
i
t
e
(
$
f
p
,
 
$
c
o
u
n
t
 
)
;

 
 
 
 
/
/
 
f
c
l
o
s
e
(
$
f
p
)
;

 
 
 
 
/
/
 
}

}


/
*
*

 
*
 
A
s
k
s
 
w
h
e
t
h
e
r
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
s
h
o
p
 
i
s
 
a
v
a
i
l
a
b
l
e
 
o
r
 
n
o
t
.
 
N
o
t
 
c
u
r
r
e
n
t
l
y
 
u
s
e
d
.

 
*
/

 
f
u
n
c
t
i
o
n
 
q
u
e
r
y
_
s
h
o
p
(
$
r
e
q
u
e
s
t
 
=
 
'
'
)

 
{

 
 
 
 
 
i
f
 
(
$
r
e
q
u
e
s
t
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
R
e
q
u
e
s
t
 
n
o
t
 
s
e
t
'
;

 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
}


 
 
 
 
 
i
f
 
(
!
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
c
u
r
l
_
i
n
i
t
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
 
'
E
r
r
o
r
,
 
C
U
R
L
 
n
o
t
 
e
n
a
b
l
e
d
 
o
n
 
t
h
i
s
 
s
e
r
v
e
r
.
'
;

 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
'
h
t
t
p
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
s
h
o
p
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
'
.
$
r
e
q
u
e
s
t
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
 
c
u
r
l
 
c
a
l
l
 
t
o
 
'
.
$
u
r
l
,
 
'
C
u
r
l
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
l
o
g
g
i
n
g
_
t
i
m
e
_
s
t
a
r
t
 
=
 
m
i
c
r
o
t
i
m
e
(
t
r
u
e
)
;


 
 
 
 
 
 
 
 
 
$
c
u
r
l
_
h
a
n
d
l
e
 
=
 
c
u
r
l
_
i
n
i
t
(
)
;

 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
u
r
l
_
h
a
n
d
l
e
,
 
C
U
R
L
O
P
T
_
U
R
L
,
 
$
u
r
l
)
;

 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
u
r
l
_
h
a
n
d
l
e
,
 
C
U
R
L
O
P
T
_
C
O
N
N
E
C
T
T
I
M
E
O
U
T
,
 
2
)
;

 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
u
r
l
_
h
a
n
d
l
e
,
 
C
U
R
L
O
P
T
_
U
S
E
R
A
G
E
N
T
,
 
'
J
o
m
r
e
s
'
)
;

 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
u
r
l
_
h
a
n
d
l
e
,
 
C
U
R
L
O
P
T
_
R
E
T
U
R
N
T
R
A
N
S
F
E
R
,
 
1
)
;

 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
c
u
r
l
_
e
x
e
c
(
$
c
u
r
l
_
h
a
n
d
l
e
)
;

 
 
 
 
 
 
 
 
 
c
u
r
l
_
c
l
o
s
e
(
$
c
u
r
l
_
h
a
n
d
l
e
)
;


 
 
 
 
 
 
 
 
 
$
l
o
g
g
i
n
g
_
t
i
m
e
_
e
n
d
 
=
 
m
i
c
r
o
t
i
m
e
(
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
$
l
o
g
g
i
n
g
_
t
i
m
e
 
=
 
$
l
o
g
g
i
n
g
_
t
i
m
e
_
e
n
d
 
-
 
$
l
o
g
g
i
n
g
_
t
i
m
e
_
s
t
a
r
t
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
C
u
r
l
 
c
a
l
l
 
t
o
o
k
 
'
.
$
l
o
g
g
i
n
g
_
t
i
m
e
.
'
 
s
e
c
o
n
d
s
 
'
,
 
'
C
u
r
l
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


 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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

 
}


/
/
 
A
d
a
p
t
e
d
 
f
r
o
m
 
h
t
t
p
:
/
/
u
k
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
t
i
m
e
.
p
h
p
#
8
9
4
1
5

/
*
*

 
*
 
U
s
e
d
 
b
y
 
l
i
s
t
 
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
 
s
c
r
i
p
t
 
t
o
 
f
o
r
m
a
t
 
t
h
e
 
"
l
a
s
t
 
b
o
o
k
i
n
g
"
 
o
u
t
p
u
t
 
m
e
s
s
a
g
e
.

 
*
/

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
n
i
c
e
t
i
m
e
(
$
d
a
t
e
)

{

 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
}

 
 
 
 
$
p
e
r
i
o
d
s
 
=
 
a
r
r
a
y
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
D
A
T
E
P
E
R
I
O
D
_
S
E
C
O
N
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
D
A
T
E
P
E
R
I
O
D
_
S
E
C
O
N
D
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
D
A
T
E
P
E
R
I
O
D
_
M
I
N
U
T
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
D
A
T
E
P
E
R
I
O
D
_
M
I
N
U
T
E
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
D
A
T
E
P
E
R
I
O
D
_
H
O
U
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
D
A
T
E
P
E
R
I
O
D
_
H
O
U
R
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
D
A
T
E
P
E
R
I
O
D
_
D
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
D
A
T
E
P
E
R
I
O
D
_
D
A
Y
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
D
A
T
E
P
E
R
I
O
D
_
W
E
E
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
D
A
T
E
P
E
R
I
O
D
_
W
E
E
K
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
D
A
T
E
P
E
R
I
O
D
_
M
O
N
T
H
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
D
A
T
E
P
E
R
I
O
D
_
M
O
N
T
H
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
D
A
T
E
P
E
R
I
O
D
_
Y
E
A
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
D
A
T
E
P
E
R
I
O
D
_
Y
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
,
 
f
a
l
s
e
)
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
D
A
T
E
P
E
R
I
O
D
_
D
E
C
A
D
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
D
A
T
E
P
E
R
I
O
D
_
D
E
C
A
D
E
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
)
;

 
 
 
 
$
l
e
n
g
t
h
s
 
=
 
a
r
r
a
y
(
'
6
0
'
,
 
'
6
0
'
,
 
'
2
4
'
,
 
'
7
'
,
 
'
4
.
3
5
'
,
 
'
1
2
'
,
 
'
1
0
'
)
;


 
 
 
 
$
n
o
w
 
=
 
t
i
m
e
(
)
;

 
 
 
 
$
u
n
i
x
_
d
a
t
e
 
=
 
s
t
r
t
o
t
i
m
e
(
$
d
a
t
e
)
;

 
 
 
 
/
/
 
c
h
e
c
k
 
v
a
l
i
d
i
t
y
 
o
f
 
d
a
t
e

 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
u
n
i
x
_
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
}


 
 
 
 
/
/
 
i
s
 
i
t
 
f
u
t
u
r
e
 
d
a
t
e
 
o
r
 
p
a
s
t
 
d
a
t
e

 
 
 
 
i
f
 
(
$
n
o
w
 
>
 
$
u
n
i
x
_
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
$
d
i
f
f
e
r
e
n
c
e
 
=
 
$
n
o
w
 
-
 
$
u
n
i
x
_
d
a
t
e
;

 
 
 
 
 
 
 
 
$
t
e
n
s
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
D
A
T
E
P
E
R
I
O
D
_
A
G
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
D
A
T
E
P
E
R
I
O
D
_
A
G
O
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
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
d
i
f
f
e
r
e
n
c
e
 
=
 
$
u
n
i
x
_
d
a
t
e
 
-
 
$
n
o
w
;

 
 
 
 
 
 
 
 
$
t
e
n
s
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
D
A
T
E
P
E
R
I
O
D
_
F
R
O
M
N
O
W
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
D
A
T
E
P
E
R
I
O
D
_
F
R
O
M
N
O
W
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
;

 
 
 
 
}


	
$
n
 
=
 
c
o
u
n
t
(
$
l
e
n
g
t
h
s
)
 
-
 
1
;

 
 
 
 
f
o
r
 
(
$
j
 
=
 
0
;
 
$
d
i
f
f
e
r
e
n
c
e
 
>
=
 
$
l
e
n
g
t
h
s
[
 
$
j
 
]
 
&
&
 
$
j
 
<
 
$
n
;
 
+
+
$
j
)
 
{

 
 
 
 
 
 
 
 
$
d
i
f
f
e
r
e
n
c
e
 
/
=
 
$
l
e
n
g
t
h
s
[
 
$
j
 
]
;

 
 
 
 
}


 
 
 
 
$
d
i
f
f
e
r
e
n
c
e
 
=
 
r
o
u
n
d
(
$
d
i
f
f
e
r
e
n
c
e
)
;


 
 
 
 
i
f
 
(
$
d
i
f
f
e
r
e
n
c
e
 
!
=
 
1
)
 
{

 
 
 
 
 
 
 
 
$
p
e
r
i
o
d
s
[
 
$
j
 
]
 
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
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
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
D
A
T
E
P
E
R
I
O
D
_
S
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
 
"
$
d
i
f
f
e
r
e
n
c
e
 
$
p
e
r
i
o
d
s
[
$
j
]
 
{
$
t
e
n
s
e
}
"
;

}


/
*
*

 
*
 
G
e
o
l
o
c
a
t
i
o
n
 
c
l
a
s
s
 
u
s
e
s
 
f
u
n
c
t
i
o
n
 
t
o
 
g
e
t
 
t
h
e
 
u
s
e
r
'
s
 
I
P
 
n
u
m
b
e
r

 
*

 
*
 
@
t
o
d
o
 
D
u
p
l
i
c
a
t
e
d
 
f
u
n
c
t
i
o
n

 
*

 
*
/

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
r
e
m
o
t
e
_
i
p
_
n
u
m
b
e
r
(
)

{

 
 
 
 
$
i
p
 
=
 
j
o
m
r
e
s
_
g
e
t
_
c
l
i
e
n
t
_
i
p
(
)
;

 
 
 
 
$
b
a
n
g
 
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
.
'
,
 
$
i
p
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
a
n
g
)
 
!
=
 
4
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
0
.
0
.
0
.
0
'
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
(
i
n
t
)
 
$
b
a
n
g
[
 
0
 
]
.
'
.
'
.
(
i
n
t
)
 
$
b
a
n
g
[
 
1
 
]
.
'
.
'
.
(
i
n
t
)
 
$
b
a
n
g
[
 
2
 
]
.
'
.
'
.
(
i
n
t
)
 
$
b
a
n
g
[
 
3
 
]
;

}


/
*
*

 
*
 
P
u
l
l
s
 
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
 
n
u
m
b
e
r
 
f
r
o
m
 
s
e
s
s
i
o
n
 
d
a
t
a

 
*
/

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
b
o
o
k
i
n
g
_
n
u
m
b
e
r
(
)

{

 
 
 
 
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


 
 
 
 
r
e
t
u
r
n
 
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
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
]
;

}


/
*
*

 
*
 
F
i
g
u
r
e
 
o
u
t
 
w
h
a
t
 
t
h
e
 
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
 
u
i
d
 
s
h
o
u
l
d
 
b
e

 
*
/

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
t
e
c
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
u
i
d
(
)

{

 
 
 
 
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
 
0
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
s
e
l
e
c
t
e
d
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
 
0
)
;


 
 
 
 
i
f
 
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
 
=
=
 
0
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
u
i
d
 
=
 
(
i
n
t
)
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
,
 
0
)
;

 
 
 
 
}


 
 
 
 
/
/
 
F
i
n
d
i
n
g
 
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
 
u
i
d

 
 
 
 
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
 
(
i
n
t
)
 
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
 
1
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
u
i
d
 
=
 
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
[
 
0
 
]
;

 
 
 
 
}


 
 
 
 
/
/
T
O
D
O
 
r
e
m
o
v
e
 
t
h
i
s
,
 
b
u
t
 
t
o
o
 
m
u
c
h
 
s
t
u
f
f
 
d
e
p
e
n
d
s
 
o
n
 
i
t
 
a
t
 
t
h
e
 
m
o
m
e
n
t
.
.

 
 
 
 
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
M
a
n
a
g
e
r
 
&
&
 
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
;

 
 
 
 
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
t
a
s
k
'
)
 
=
=
 
'
s
h
o
w
R
o
o
m
D
e
t
a
i
l
s
'
)
 
{

 
 
 
 
 
 
 
 
$
r
o
o
m
U
i
d
 
=
 
(
i
n
t
)
 
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
r
o
o
m
U
i
d
'
,
 
0
)
;


 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
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
b
a
s
i
c
_
r
o
o
m
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
u
i
d
_
f
o
r
_
r
o
o
m
_
u
i
d
(
$
r
o
o
m
U
i
d
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
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
t
a
s
k
'
)
 
=
=
 
'
h
a
n
d
l
e
r
e
q
'
 
|
|
 
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
a
s
k
'
)
 
=
=
 
'
c
o
m
p
l
e
t
e
b
k
'
 
|
|
 
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
a
s
k
'
)
 
=
=
 
'
p
r
o
c
e
s
s
p
a
y
m
e
n
t
'
)
 
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

 
 
 
 
}


 
 
 
 
/
/
 
P
a
y
m
e
n
t
 
s
p
e
c
i
f
i
c
 
s
t
u
f
f
.

 
 
 
 
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
t
a
s
k
'
)
 
=
=
 
'
c
o
m
p
l
e
t
e
b
k
'
 
|
|
 
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
a
s
k
'
)
 
=
=
 
'
p
r
o
c
e
s
s
p
a
y
m
e
n
t
'
 
|
|
 
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
a
s
k
'
)
 
=
=
 
'
c
o
n
f
i
r
m
b
o
o
k
i
n
g
'
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
_
P
O
S
T
[
 
'
s
p
e
c
i
a
l
R
e
q
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
p
e
c
i
a
l
R
e
q
s
 
=
 
g
e
t
E
s
c
a
p
e
d
(
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
P
O
S
T
,
 
'
s
p
e
c
i
a
l
R
e
q
s
'
,
 
'
'
)
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
-
>
u
p
d
a
t
e
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
(
'
e
r
r
o
r
_
l
o
g
'
,
 
$
s
p
e
c
i
a
l
R
e
q
s
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
F
o
r
 
p
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
s
 
t
h
a
t
 
d
o
n
'
t
 
e
x
i
s
t

 
 
 
 
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
_
u
i
d
s
 
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
)
;

 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
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
_
u
i
d
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
u
i
d
 
=
 
0
;

 
 
 
 
}


 
 
 
 
/
/
 
F
i
n
i
s
h
 
f
i
n
d
i
n
g
 
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
 
u
i
d

 
 
 
 
r
e
t
u
r
n
 
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

}


/
/
 

/
*
*

 
*
 
R
e
t
u
r
n
 
"
N
A
"
 
i
f
 
n
o
 
g
a
t
e
w
a
y
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
 
T
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
 
w
i
l
l
 
p
r
o
c
e
s
s
 
p
a
y
m
e
n
t
 
w
i
t
h
o
u
t
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
c
a
l
l
 
a
 
g
a
t
e
w
a
y
 
(
I
E
 
s
i
m
p
l
y
 
e
n
t
e
r
 
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
)

 
*
/

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
v
a
l
i
d
a
t
e
_
g
a
t
e
w
a
y
_
p
l
u
g
i
n
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
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
N
A
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 

 
 
 
 
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
_
p
l
u
g
i
n
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
5
0
9
'
]
 
a
s
 
$
e
v
e
n
t
N
a
m
e
 
=
>
 
$
e
 
)
 
{

 
 
 
 
 
 
 
 
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
_
p
l
u
g
i
n
s
[
]
 
=
 
$
e
v
e
n
t
N
a
m
e
;

 
 
 
 
}

 
 
 
/
/
 
N
o
 
g
a
t
e
w
a
y
s
 
a
r
e
 
i
n
s
t
a
l
l
e
d

 
 
 
 
i
f
 
(
 
e
m
p
t
y
(
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
_
p
l
u
g
i
n
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
 
'
N
A
'
;

 
 
 
 
}

 
 
 
 

 
 
 
 
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
 
=
=
 
'
1
'
 
&
&
 
!
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
 
{

	
	
r
e
t
u
r
n
 
"
N
A
"
;

	
}

 
 
 
 

 
 
 
 
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
_
R
E
Q
U
E
S
T
[
 
'
p
l
u
g
i
n
'
 
]
)
 
&
&
 
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
g
a
t
e
w
a
y
'
 
]
)
 
)
 
{

 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
 
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
b
o
o
k
i
n
g
[
 
'
g
a
t
e
w
a
y
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
p
l
u
g
i
n
 
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
l
u
g
i
n
'
,
 
'
'
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
g
a
t
e
w
a
y
'
 
]
 
=
 
$
p
l
u
g
i
n
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
l
u
g
i
n
_
s
e
t
t
i
n
g
s
"
)
;

 
 
 
 
$
p
l
u
g
i
n
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
 
n
e
w
 
g
a
t
e
w
a
y
_
p
l
u
g
i
n
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

 
 
 
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
e
t
_
s
e
t
t
i
n
g
s
_
f
o
r
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
!
i
s
s
e
t
(
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
a
t
e
w
a
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
[
$
p
l
u
g
i
n
]
)
 
)
 
{
 
/
/
 
G
a
t
e
w
a
y
 
h
a
s
 
n
o
 
s
e
t
t
i
n
g
s

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
N
A
'
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
a
t
e
w
a
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
[
$
p
l
u
g
i
n
]
[
'
a
c
t
i
v
e
'
]
)
 
{

 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
"
E
r
r
o
r
,
 
g
a
t
e
w
a
y
 
p
a
s
s
e
d
 
e
i
t
h
e
r
 
d
o
e
s
n
'
t
 
e
x
i
s
t
,
 
o
r
 
i
s
 
n
o
t
 
a
c
t
i
v
e
,
 
p
r
o
b
a
b
l
e
 
h
a
c
k
 
a
t
t
e
m
p
t
"
)
;

 
 
 
 
 
 
 
 
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
"
E
r
r
o
r
,
 
g
a
t
e
w
a
y
 
p
a
s
s
e
d
 
e
i
t
h
e
r
 
d
o
e
s
n
'
t
 
e
x
i
s
t
,
 
o
r
 
i
s
 
n
o
t
 
a
c
t
i
v
e
,
 
p
r
o
b
a
b
l
e
 
h
a
c
k
 
a
t
t
e
m
p
t
"
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

 
 
 
 
 
 
 
 
d
i
e
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
 
$
p
l
u
g
i
n
;

}


 
/
*
*

 
*
 
G
e
n
e
r
a
t
e
s
 
a
n
c
h
o
r
s
 
f
o
r
 
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
 
t
a
b
s

 
*

 
*
 
C
o
m
m
e
n
t
e
d
 
o
u
t
 
c
o
d
e
 
t
h
a
t
 
t
r
i
e
s
 
t
o
 
m
a
k
e
 
t
h
e
 
a
n
c
h
o
r
 
o
f
 
t
h
e
 
t
a
b
s
 
b
a
s
e
d
 
o
n
 
t
h
e
 
n
a
m
e
 
o
f
 
t
h
e
 
t
a
b
.
 
T
o
o
 
m
a
n
y
 
n
o
n
-
l
a
t
i
n
 
u
s
e
r
s
 
w
e
r
e
 
r
e
p
o
r
t
i
n
g
 
p
r
o
b
l
e
m
s
 
w
i
t
h
 
t
a
b
s
.

 
*
 
I
n
s
t
e
a
d
 
w
e
'
l
l
 
j
u
s
t
 
u
s
e
 
t
h
e
 
r
a
n
d
o
m
 
s
t
r
i
n
g
 
g
e
n
e
r
a
t
o
r
 
t
o
 
c
r
e
a
t
e
 
t
h
e
 
a
n
c
h
o
r
.

 
*

 
*
/

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
g
e
n
e
r
a
t
e
_
t
a
b
_
a
n
c
h
o
r
(
$
s
t
r
i
n
g
)

{

 
 
 
 
/
/
 
C
o
m
m
e
n
t
e
d
 
o
u
t
 
c
o
d
e
 
t
h
a
t
 
t
r
i
e
s
 
t
o
 
m
a
k
e
 
t
h
e
 
a
n
c
h
o
r
 
o
f
 
t
h
e
 
t
a
b
s
 
b
a
s
e
d
 
o
n
 
t
h
e
 
n
a
m
e
 
o
f
 
t
h
e
 
t
a
b
.
 
T
o
o
 
m
a
n
y
 
n
o
n
-
l
a
t
i
n
 
u
s
e
r
s
 
w
e
r
e
 
r
e
p
o
r
t
i
n
g
 
p
r
o
b
l
e
m
s
 
w
i
t
h
 
t
a
b
s
.

 
 
 
 
/
/
 
I
n
s
t
e
a
d
 
w
e
'
l
l
 
j
u
s
t
 
u
s
e
 
t
h
e
 
r
a
n
d
o
m
 
s
t
r
i
n
g
 
g
e
n
e
r
a
t
o
r
 
t
o
 
c
r
e
a
t
e
 
t
h
e
 
a
n
c
h
o
r
.

 
 
 
 
/
*
 
	
$
u
n
w
a
n
t
e
d
 
=
 
a
r
r
a
y
(
"
'
"
,
"
\
"
"
,
'
,
'
)
;

 
 
 
 
$
s
t
r
i
n
g
 
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
$
u
n
w
a
n
t
e
d
,
"
-
"
,
$
s
t
r
i
n
g
)
;

 
 
 
 
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
f
i
l
t
e
r
_
v
a
r
'
)
)

 
 
 
 
 
 
 
 
$
a
n
c
h
o
r
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
s
t
r
i
n
g
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
,
F
I
L
T
E
R
_
F
L
A
G
_
S
T
R
I
P
_
H
I
G
H
)
;

 
 
 
 
e
l
s
e

 
 
 
 
 
 
 
 
$
a
n
c
h
o
r
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
s
t
r
i
n
g
)
;


 
 
 
 
$
a
n
c
h
o
r
 
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
"
 
"
,
"
_
"
,
$
a
n
c
h
o
r
)
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
a
n
c
h
o
r
)
=
=
0
)
 
/
/
 
G
i
v
e
 
u
p
 
t
r
y
i
n
g
 
t
o
 
f
i
l
t
e
r
 
o
u
t
 
u
n
w
a
n
t
e
d
 
c
h
a
r
s
,
 
i
n
s
t
e
a
d
 
w
e
'
l
l
 
j
u
s
t
 
r
e
p
l
a
c
e
 
a
n
y
 
s
p
a
c
e
s
 
a
n
d
 
r
e
t
u
r
n
 
t
h
e
 
s
t
r
i
n
g

 
 
 
 
 
 
 
 
$
a
n
c
h
o
r
 
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
"
 
"
,
"
_
"
,
$
s
t
r
i
n
g
)
;
 
*
/


 
 
 
 
$
a
n
c
h
o
r
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
5
)
;


 
 
 
 
r
e
t
u
r
n
 
$
a
n
c
h
o
r
;

}


/
*
*

 
*
 
R
e
t
u
r
n
 
t
h
e
 
"
s
h
o
w
t
i
m
e
"
 
s
i
n
g
l
e
t
o
n

 
*
/

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
s
h
o
w
t
i
m
e
(
$
s
e
t
t
i
n
g
)

{

 
 
 
 
$
s
h
o
w
t
i
m
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
s
h
o
w
t
i
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
s
h
o
w
t
i
m
e
-
>
$
s
e
t
t
i
n
g
;

}


/
*
*

 
*
 
S
e
t
 
a
 
s
h
o
w
t
i
m
e
 
v
a
r
i
a
b
l
e
 
t
o
 
X

 
*
/

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
$
s
e
t
t
i
n
g
,
 
$
v
a
l
u
e
)

{

	
$
s
h
o
w
t
i
m
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
s
h
o
w
t
i
m
e
'
)
;


 
 
 
 
i
f
 
(
!
$
s
h
o
w
t
i
m
e
-
>
$
s
e
t
t
i
n
g
 
=
 
$
v
a
l
u
e
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


/
*
*

 
*
 
F
i
n
d
 
s
e
t
t
i
n
g
s
 
f
o
r
 
a
 
g
i
v
e
n
 
p
l
u
g
i
n
.
 
T
y
p
i
c
a
l
l
y
 
u
s
e
d
 
b
y
 
g
a
t
e
w
a
y
s

 
*
/

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
p
l
u
g
i
n
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
p
l
u
g
i
n
,
 
$
p
r
o
p
_
i
d
 
=
 
0
)

{

 
 
 
 
/
/
 
T
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
 
i
s
 
e
x
c
l
u
s
i
v
e
l
y
 
f
o
r
 
g
a
t
e
w
a
y
 
p
l
u
g
i
n
s

 
 
 
 
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
!
i
s
s
e
t
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
5
0
9
'
]
[
$
p
l
u
g
i
n
]
)
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
 
/
/
 
G
a
t
e
w
a
y
 
i
s
n
Â
´
t
 
i
n
s
t
a
l
l
e
d

 
 
 
 
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
5
0
9
'
]
[
$
p
l
u
g
i
n
]
)
 
&
&
 
c
o
u
n
t
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
5
0
9
'
]
[
$
p
l
u
g
i
n
]
)
 
=
=
 
0
)
 
{
 
/
/
 
L
e
t
'
s
 
c
h
e
c
k
 
t
o
 
s
e
e
 
t
h
a
t
 
t
h
e
 
g
a
t
e
w
a
y
 
h
a
s
n
'
t
 
b
e
e
n
 
u
n
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
 
I
t
'
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
h
a
t
 
t
h
e
 
s
e
t
t
i
n
g
s
 
e
x
i
s
t
,
 
b
u
t
 
t
h
e
 
g
a
t
e
w
a
y
 
c
o
d
e
 
i
t
s
e
l
f
 
d
o
e
s
n
'
t
.

 
 
 
 
 
 
 
 
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
 
/
/
 
C
a
n
'
t
 
"
t
h
r
o
w
"
 
a
n
 
e
r
r
o
r
 
h
e
r
e
,
 
a
n
y
 
f
a
i
l
u
r
e
 
n
e
e
d
s
 
t
o
 
b
e
 
h
a
n
d
l
e
d
 
b
y
 
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
 
f
u
n
c
t
i
o
n
/
m
e
t
h
o
d

 
 
 
 
}


 
 
 
 
$
s
e
t
t
i
n
g
A
r
r
a
y
 
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
 
0
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
p
r
o
p
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
r
o
p
e
r
t
y
I
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
p
r
o
p
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
l
u
g
i
n
_
s
e
t
t
i
n
g
s
"
)
;

 
 
 
 
$
p
l
u
g
i
n
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
 
n
e
w
 
g
a
t
e
w
a
y
_
p
l
u
g
i
n
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

 
 
 
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
e
t
_
s
e
t
t
i
n
g
s
_
f
o
r
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



 
 
 
 
r
e
t
u
r
n
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
a
t
e
w
a
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
[
$
p
l
u
g
i
n
]
;

}


/
*
*

 
*
 
I
m
p
o
r
t
s
 
a
 
c
l
a
s
s
 
J
I
T
 
a
s
 
f
o
u
n
d
 
i
n
 
t
h
e
 
c
l
a
s
s
e
s
 
r
e
g
i
s
t
r
y
.
 
I
f
 
n
o
t
 
f
o
u
n
d
 
w
i
l
l
 
r
e
p
o
r
t
 
a
 
b
a
c
k
t
r
a
c
e
.

 
*
/

f
u
n
c
t
i
o
n
 
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
$
c
l
a
s
s
)

{

	
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
$
c
l
a
s
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


	
/
/
f
i
r
s
t
 
c
h
e
c
k
 
c
u
s
t
o
m
 
c
o
d
e
 
d
i
r

	
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
_
R
E
M
O
T
E
P
L
U
G
I
N
S
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
c
u
s
t
o
m
_
c
o
d
e
'
.
J
R
D
S
.
$
c
l
a
s
s
.
'
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
)
)
 
{

	
	
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
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
c
u
s
t
o
m
_
c
o
d
e
'
.
J
R
D
S
.
$
c
l
a
s
s
.
'
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

	

	
g
l
o
b
a
l
 
$
c
l
a
s
s
e
s
;


	
/
/
c
h
e
c
k
 
c
o
r
e
 
a
n
d
 
r
e
m
o
t
e
 
p
l
u
g
i
n
s
 
d
i
r
s

	
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
l
a
s
s
e
s
[
$
c
l
a
s
s
]
)
)
 
{

	
	
r
e
q
u
i
r
e
_
o
n
c
e
 
$
c
l
a
s
s
e
s
[
$
c
l
a
s
s
]
.
$
c
l
a
s
s
.
'
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

	

	
/
/
l
a
s
t
 
p
l
a
c
e
 
t
o
 
c
h
e
c
k
 
i
s
 
j
o
m
r
e
s
 
c
o
r
e
 
c
l
a
s
s
e
s
 
d
i
r

	
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
_
C
L
A
S
S
E
S
_
A
B
S
P
A
T
H
.
$
c
l
a
s
s
.
'
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
)
)
 
{

	
	
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
C
L
A
S
S
E
S
_
A
B
S
P
A
T
H
.
$
c
l
a
s
s
.
'
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

	

	
/
/
c
l
a
s
s
 
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
 
s
o
 
w
e
`
l
l
 
e
c
h
o
 
a
 
m
e
s
s
a
g
e
 
a
n
d
 
e
x
i
t

	
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
 
c
l
a
s
s
 
'
.
$
c
l
a
s
s
.
"
 
d
o
e
s
n
'
t
 
e
x
i
s
t
.
"
;

 
 
 
 
$
t
r
a
c
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
b
a
c
k
t
r
a
c
e
 
=
 
d
e
b
u
g
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
;

 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
=
 
"
<
b
r
/
>
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;

 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
.
=
 
"
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;

 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
.
=
 
"
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;
 

 
 
 
 
e
c
h
o
 
$
t
r
a
c
e
;

	
e
x
i
t
;

}


/
*
*

 
*
 
I
n
t
e
g
r
a
t
i
o
n
 
s
c
r
i
p
t
 
u
s
e
s
 
t
h
i
s
 
t
o
 
s
e
e
 
i
f
 
w
e
 
n
e
e
d
 
t
o
 
b
u
i
l
d
 
r
e
g
i
s
t
r
y
 
f
i
l
e
s

 
*
/

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
a
r
c
h
_
c
o
r
e
_
a
n
d
_
r
e
m
o
t
e
_
d
i
r
s
_
f
o
r
_
c
l
a
s
s
f
i
l
e
s
(
)

{

	
g
l
o
b
a
l
 
$
c
l
a
s
s
e
s
;


	
i
f
 
(
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
l
u
g
i
n
_
p
a
t
h
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
r
e
_
p
l
u
g
i
n
s
_
d
i
r
e
c
t
o
r
y
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
;

	
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
d
i
r
e
c
t
o
r
y
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
;

	
$
c
l
a
s
s
e
s
_
t
m
p
_
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
r
e
g
i
s
t
r
y
_
c
l
a
s
s
e
s
.
p
h
p
'
;


	
i
f
 
(
i
s
_
d
i
r
(
$
c
o
r
e
_
p
l
u
g
i
n
s
_
d
i
r
e
c
t
o
r
y
)
)
 
{

	
	
$
d
 
=
 
@
d
i
r
(
$
c
o
r
e
_
p
l
u
g
i
n
s
_
d
i
r
e
c
t
o
r
y
)
;

	
	
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

	
	
	
i
f
 
(
s
u
b
s
t
r
(
$
e
n
t
r
y
,
 
0
,
 
1
)
 
!
=
 
'
.
'
)
 
{

	
	
	
	
$
p
l
u
g
i
n
_
p
a
t
h
s
[
 
]
 
=
 
$
c
o
r
e
_
p
l
u
g
i
n
s
_
d
i
r
e
c
t
o
r
y
.
$
e
n
t
r
y
.
J
R
D
S
;

	
	
	
}

	
	
}

	
}


	
i
f
 
(
i
s
_
d
i
r
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
d
i
r
e
c
t
o
r
y
)
)
 
{

	
	
$
d
 
=
 
@
d
i
r
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
d
i
r
e
c
t
o
r
y
)
;

	
	
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

	
	
	
i
f
 
(
s
u
b
s
t
r
(
$
e
n
t
r
y
,
 
0
,
 
1
)
 
!
=
 
'
.
'
)
 
{

	
	
	
	
$
p
l
u
g
i
n
_
p
a
t
h
s
[
 
]
 
=
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
d
i
r
e
c
t
o
r
y
.
$
e
n
t
r
y
.
J
R
D
S
;

	
	
	
}

	
	
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
p
l
u
g
i
n
_
p
a
t
h
s
 
a
s
 
$
d
i
r
e
c
t
o
r
y
)
 
{

	
	
$
d
 
=
 
@
d
i
r
(
$
d
i
r
e
c
t
o
r
y
)
;

	
	
i
f
 
(
$
d
)
 
{

	
	
	
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

	
	
	
	
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
 
$
e
n
t
r
y
;

	
	
	
	
i
f
 
(
s
u
b
s
t
r
(
$
e
n
t
r
y
,
 
0
,
 
1
)
 
!
=
 
'
.
'
)
 
{

	
	
	
	
	
i
f
 
(
s
t
r
s
t
r
(
$
e
n
t
r
y
,
 
'
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
)
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
f
i
l
e
n
a
m
e
)
 
>
 
8
)
 
{

	
	
	
	
	
	
	
$
s
t
r
i
p
p
e
d
N
a
m
e
 
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
.
'
,
 
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
)
;

	
	
	
	
	
	
	
$
s
t
r
i
p
p
e
d
N
a
m
e
 
=
 
s
u
b
s
t
r
(
$
s
t
r
i
p
p
e
d
N
a
m
e
,
 
0
,
 
-
8
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
i
p
p
e
d
N
a
m
e
 
=
 
$
f
i
l
e
n
a
m
e
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
=
 
s
u
b
s
t
r
(
$
s
t
r
i
p
p
e
d
N
a
m
e
,
 
1
,
 
5
)
;

	
	
	
	
	
	
i
f
 
(
!
i
s
_
n
u
m
e
r
i
c
(
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
)
)
 
{

	
	
	
	
	
	
	
$
c
l
a
s
s
e
s
[
 
$
s
t
r
i
p
p
e
d
N
a
m
e
 
]
 
=
 
$
d
i
r
e
c
t
o
r
y
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
	
$
d
-
>
c
l
o
s
e
(
)
;

	
	
}

	
}

	

	
i
f
 
(
!
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
l
a
s
s
e
s
_
t
m
p
_
f
i
l
e
,

'
<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


$
c
l
a
s
s
e
s
 
=
 
'
 
.
v
a
r
_
e
x
p
o
r
t
(
$
c
l
a
s
s
e
s
,
 
t
r
u
e
)
.
'
;

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
E
R
R
O
R
:
 
'
.
$
c
l
a
s
s
e
s
_
t
m
p
_
f
i
l
e
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
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

	
	
e
x
i
t
;

	
}

	

	
r
e
t
u
r
n
 
$
c
l
a
s
s
e
s
;

}


/
*
*

 
*
 
u
t
i
l
i
t
 
t
o
 
c
l
e
a
n
 
u
p
 
u
r
l
s

 
*
/

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
V
a
l
i
d
a
t
e
U
r
l
(
$
u
r
l
)

{

 
 
 
 
$
u
r
l
 
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
a
m
p
;
'
,
 
'
&
'
,
 
$
u
r
l
)
;

 
 
 
 
$
u
r
l
 
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
'
,
 
'
&
a
m
p
;
'
,
 
$
u
r
l
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
r
l
;

}


/
*
*

 
*
 
C
M
S
 
S
p
e
c
i
f
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
 
u
s
e
 
t
h
i
s
 
t
o
 
f
i
n
d
 
s
e
t
t
i
n
g
s
 
f
o
r
 
m
o
d
u
l
e
s

 
*
/

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
v
a
l
s
[
 
'
u
s
e
C
o
l
s
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
i
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
_
u
s
e
C
o
l
s
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
c
o
l
s
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
i
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
_
f
e
a
t
u
r
e
c
o
l
s
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
g
e
o
s
e
a
r
c
h
t
y
p
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
i
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
_
g
e
o
s
e
a
r
c
h
t
y
p
e
'
 
]
;

 
 
 
 
$
v
a
l
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
n
a
m
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
i
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
_
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
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
p
t
y
p
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
i
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
_
p
t
y
p
e
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
r
o
o
m
_
t
y
p
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
i
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
'
 
]
;


 
 
 
 
$
v
a
l
s
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
i
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
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
a
v
a
i
l
a
b
i
l
i
t
y
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
i
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
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
g
e
o
s
e
a
r
c
h
_
d
r
o
p
d
o
w
n
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
i
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
_
g
e
o
s
e
a
r
c
h
t
y
p
e
_
d
r
o
p
d
o
w
n
'
 
]
;

 
 
 
 
$
v
a
l
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
n
a
m
e
_
d
r
o
p
d
o
w
n
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
i
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
_
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
_
d
r
o
p
d
o
w
n
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
p
t
y
p
e
_
d
r
o
p
d
o
w
n
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
i
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
_
p
t
y
p
e
_
d
r
o
p
d
o
w
n
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
r
o
o
m
_
t
y
p
e
_
d
r
o
p
d
o
w
n
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
i
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
_
d
r
o
p
d
o
w
n
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
s
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
i
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
_
f
e
a
t
u
r
e
s
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
s
_
d
r
o
p
d
o
w
n
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
i
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
_
f
e
a
t
u
r
e
s
_
d
r
o
p
d
o
w
n
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
p
r
i
c
e
r
a
n
g
e
s
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
i
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
_
p
r
i
c
e
r
a
n
g
e
s
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
p
r
i
c
e
r
a
n
g
e
_
i
n
c
r
e
m
e
n
t
s
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
i
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
_
p
r
i
c
e
r
a
n
g
e
_
i
n
c
r
e
m
e
n
t
s
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
s
e
l
e
c
t
c
o
m
b
o
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
i
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
_
s
e
l
e
c
t
c
o
m
b
o
'
 
]
;


 
 
 
 
$
v
a
l
s
[
 
'
g
u
e
s
t
n
u
m
b
e
r
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
i
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
_
g
u
e
s
t
n
u
m
b
e
r
'
 
]
;

 
 
 
 
$
v
a
l
s
[
 
'
s
t
a
r
s
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
i
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
_
s
t
a
r
s
'
 
]
;


 
 
 
 
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


/
*
*

 
*
 
G
e
t
 
t
h
e
 
m
o
n
t
h
 
n
a
m
e
,
 
s
e
t
 
e
d
i
t
a
b
l
e
 
t
o
 
t
r
u
e
 
t
o
 
s
h
o
w
 
t
h
e
 
e
d
i
t
i
n
g
 
m
o
d
e
 
o
p
t
i
o
n

 
*
/

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
T
h
i
s
M
o
n
t
h
N
a
m
e
(
$
m
o
n
t
h
N
u
m
b
e
r
,
 
$
e
d
i
t
a
b
l
e
 
=
 
t
r
u
e
)

{

 
 
 
 
$
m
o
n
t
h
N
u
m
b
e
r
 
=
 
i
n
t
v
a
l
(
$
m
o
n
t
h
N
u
m
b
e
r
 
-
 
1
)
;

 
 
 
 
$
m
N
a
m
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
'
.
$
m
o
n
t
h
N
u
m
b
e
r
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
M
O
N
T
H
S
_
L
O
N
G
_
'
.
$
m
o
n
t
h
N
u
m
b
e
r
,
 
$
e
d
i
t
a
b
l
e
)
;

 
 
 
 
$
t
h
i
s
M
o
n
t
h
N
a
m
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
'
.
$
m
o
n
t
h
N
u
m
b
e
r
,
 
$
m
N
a
m
e
,
 
$
e
d
i
t
a
b
l
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
t
h
i
s
M
o
n
t
h
N
a
m
e
;

}


/
*
*

 
*
 
M
o
d
u
l
e
/
P
l
u
g
i
n
/
W
i
d
g
e
t
 
i
n
s
t
a
l
l
a
t
i
o
n
 
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
 
t
h
a
t
 
i
s
 
c
a
l
l
e
d
 
w
h
e
n
 
u
s
i
n
g
 
t
h
e
 
t
h
i
r
d
 
p
a
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
r

 
*
/

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
s
t
a
l
l
_
e
x
t
e
r
n
a
l
_
p
l
u
g
i
n
(
$
p
l
u
g
i
n
_
n
a
m
e
,
 
$
p
l
u
g
i
n
_
t
y
p
e
,
 
$
m
a
m
b
o
t
_
t
y
p
e
 
=
 
'
'
,
 
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
,
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
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
f
o
l
d
e
r
 
=
 
'
c
'
,
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
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
f
o
l
d
e
r
 
=
 
'
a
'
,
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
m
o
d
u
l
e
_
f
o
l
d
e
r
 
=
 
'
m
'
,
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
_
m
a
m
b
o
t
_
f
o
l
d
e
r
 
=
 
'
b
'
)

{

 
 
 
 
s
w
i
t
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
_
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
w
i
d
g
e
t
'
:
 
/
/
 
W
o
r
d
p
r
e
s
s
 
w
i
d
g
e
t
s

 
 
 
 
 
 
 
 
 
 
 
 
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
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
d
g
e
t
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
d
g
e
t
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
d
g
e
t
_
t
a
r
g
e
t
 
=
 
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
w
p
-
c
o
n
t
e
n
t
'
.
J
R
D
S
.
'
p
l
u
g
i
n
s
'
.
J
R
D
S
.
$
p
l
u
g
i
n
_
n
a
m
e
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
t
e
s
t
_
a
n
d
_
m
a
k
e
_
d
i
r
e
c
t
o
r
y
(
$
w
i
d
g
e
t
_
t
a
r
g
e
t
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
 
w
r
i
t
e
 
t
o
 
'
.
$
w
i
d
g
e
t
_
t
a
r
g
e
t
.
'
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
p
a
r
e
n
t
 
p
a
t
h
 
i
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
 
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
i
n
f
o
_
f
i
l
e
 
=
 
$
w
i
d
g
e
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
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
i
n
f
o
_
f
i
l
e
_
t
e
m
p
 
=
 
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
c
o
p
y
(
$
p
l
u
g
i
n
_
i
n
f
o
_
f
i
l
e
,
 
$
p
l
u
g
i
n
_
i
n
f
o
_
f
i
l
e
_
t
e
m
p
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
d
g
e
t
_
m
o
v
e
_
r
e
s
u
l
t
 
=
 
d
i
r
m
v
(
$
w
i
d
g
e
t
_
s
o
u
r
c
e
,
 
$
w
i
d
g
e
t
_
t
a
r
g
e
t
,
 
t
r
u
e
,
 
$
f
u
n
c
l
o
c
 
=
 
'
/
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
w
i
d
g
e
t
_
m
o
v
e
_
r
e
s
u
l
t
[
 
'
s
u
c
c
e
s
s
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
o
p
y
(
$
p
l
u
g
i
n
_
i
n
f
o
_
f
i
l
e
_
t
e
m
p
,
 
$
p
l
u
g
i
n
_
i
n
f
o
_
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
$
p
l
u
g
i
n
_
i
n
f
o
_
f
i
l
e
_
t
e
m
p
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
m
o
d
u
l
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
f
u
l
l
_
n
a
m
e
 
=
 
'
m
o
d
_
'
.
$
p
l
u
g
i
n
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
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
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
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
r
e
m
o
t
e
_
p
l
u
g
i
n
_
m
o
d
u
l
e
_
f
o
l
d
e
r
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
x
m
l
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
.
'
x
m
l
'
.
J
R
D
S
.
'
1
.
5
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
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
r
e
m
o
t
e
_
p
l
u
g
i
n
_
m
o
d
u
l
e
_
f
o
l
d
e
r
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
x
m
l
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
.
'
x
m
l
'
.
J
R
D
S
.
'
1
.
5
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
t
a
r
g
e
t
 
=
 
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
m
o
d
u
l
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
m
o
d
u
l
e
_
f
u
l
l
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
t
e
s
t
_
a
n
d
_
m
a
k
e
_
d
i
r
e
c
t
o
r
y
(
$
m
o
d
u
l
e
_
t
a
r
g
e
t
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
 
w
r
i
t
e
 
t
o
 
'
.
$
m
o
d
u
l
e
_
t
a
r
g
e
t
.
'
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
p
a
r
e
n
t
 
p
a
t
h
 
i
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
 
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
c
h
o
 
"
M
o
v
i
n
g
 
c
o
n
t
e
n
t
s
 
o
f
 
"
.
$
m
o
d
u
l
e
_
x
m
l
_
s
o
u
r
c
e
.
"
 
t
o
 
"
.
$
m
o
d
u
l
e
_
t
a
r
g
e
t
.
"
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
x
m
l
_
m
o
v
e
_
r
e
s
u
l
t
 
=
 
d
i
r
m
v
(
$
m
o
d
u
l
e
_
x
m
l
_
s
o
u
r
c
e
,
 
$
m
o
d
u
l
e
_
t
a
r
g
e
t
,
 
t
r
u
e
,
 
$
f
u
n
c
l
o
c
 
=
 
J
R
D
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
_
m
o
v
e
_
r
e
s
u
l
t
 
=
 
d
i
r
m
v
(
$
m
o
d
u
l
e
_
s
o
u
r
c
e
,
 
$
m
o
d
u
l
e
_
t
a
r
g
e
t
,
 
t
r
u
e
,
 
$
f
u
n
c
l
o
c
 
=
 
J
R
D
S
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
_
m
o
v
e
_
r
e
s
u
l
t
[
 
'
s
u
c
c
e
s
s
'
 
]
 
&
&
 
$
m
o
d
u
l
e
_
x
m
l
_
m
o
v
e
_
r
e
s
u
l
t
[
 
'
s
u
c
c
e
s
s
'
 
]
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
m
a
m
b
o
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
m
a
m
b
o
t
_
f
u
l
l
_
n
a
m
e
=
$
p
l
u
g
i
n
_
n
a
m
e
;


 
 
 
 
 
 
 
 
 
 
 
 
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
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
m
b
o
t
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
m
b
o
t
_
x
m
l
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
m
b
o
t
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
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
r
e
m
o
t
e
_
p
l
u
g
i
n
_
m
a
m
b
o
t
_
f
o
l
d
e
r
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
m
b
o
t
_
x
m
l
_
s
o
u
r
c
e
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
m
b
o
t
_
t
a
r
g
e
t
 
=
 
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
p
l
u
g
i
n
s
'
.
J
R
D
S
.
$
m
a
m
b
o
t
_
t
y
p
e
.
J
R
D
S
.
$
p
l
u
g
i
n
_
n
a
m
e
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
t
e
s
t
_
a
n
d
_
m
a
k
e
_
d
i
r
e
c
t
o
r
y
(
$
m
a
m
b
o
t
_
t
a
r
g
e
t
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
 
w
r
i
t
e
 
t
o
 
'
.
$
m
a
m
b
o
t
_
t
a
r
g
e
t
.
'
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
p
a
r
e
n
t
 
p
a
t
h
 
i
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
 
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
m
b
o
t
_
x
m
l
_
m
o
v
e
_
r
e
s
u
l
t
 
=
 
d
i
r
m
v
(
$
m
a
m
b
o
t
_
x
m
l
_
s
o
u
r
c
e
,
 
$
m
a
m
b
o
t
_
t
a
r
g
e
t
,
 
t
r
u
e
,
 
$
f
u
n
c
l
o
c
 
=
 
'
/
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
m
b
o
t
_
m
o
v
e
_
r
e
s
u
l
t
 
=
 
d
i
r
m
v
(
$
m
a
m
b
o
t
_
s
o
u
r
c
e
,
 
$
m
a
m
b
o
t
_
t
a
r
g
e
t
,
 
t
r
u
e
,
 
'
/
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
m
b
o
t
_
x
m
l
_
m
o
v
e
_
r
e
s
u
l
t
[
 
'
s
u
c
c
e
s
s
'
 
]
 
&
&
 
$
m
a
m
b
o
t
_
m
o
v
e
_
r
e
s
u
l
t
[
 
'
s
u
c
c
e
s
s
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
o
p
y
(
$
m
a
m
b
o
t
_
t
a
r
g
e
t
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
,
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
_
n
a
m
e
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
$
m
a
m
b
o
t
_
t
a
r
g
e
t
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
@
u
n
l
i
n
k
(
$
m
a
m
b
o
t
_
t
a
r
g
e
t
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
'
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


 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

}


/
*
*

 
*
 
M
a
k
e
 
a
 
d
i
r
e
c
t
o
r
y

 
*
/

f
u
n
c
t
i
o
n
 
t
e
s
t
_
a
n
d
_
m
a
k
e
_
d
i
r
e
c
t
o
r
y
(
$
d
i
r
)

{

 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
d
i
r
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
@
m
k
d
i
r
(
$
d
i
r
)
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
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
$
d
i
r
.
"
 
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
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
s
t
o
r
e
 
b
o
o
k
i
n
g
 
s
e
s
s
i
o
n
 
d
a
t
a
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
"
;


 
 
 
 
 
 
 
 
 
 
 
 
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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
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
!
i
s
_
w
r
i
t
a
b
l
e
(
$
d
i
r
)
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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


/
*
*

 
*
 
A
n
 
a
l
t
e
r
n
a
t
i
v
e
 
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
 
f
u
n
c
t
i
o
n
 
b
e
c
a
u
s
e
 
I
I
R
C
 
o
n
e
 
v
e
r
s
i
o
n
 
o
f
 
P
H
P
 
h
a
d
 
p
r
o
b
l
e
m
s
 
w
i
t
h
 
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
 
n
o
t
 
e
x
i
s
t
i
n
g

 
*
/

i
f
 
(
!
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
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
'
)
)
 
{

 
 
 
 
f
u
n
c
t
i
o
n
 
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
f
i
l
e
n
a
m
e
,
 
$
i
n
c
p
a
t
h
 
=
 
f
a
l
s
e
,
 
$
r
e
s
o
u
r
c
e
_
c
o
n
t
e
x
t
 
=
 
n
u
l
l
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
f
a
l
s
e
 
=
=
=
 
$
f
h
 
=
 
f
o
p
e
n
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
,
 
'
r
b
'
,
 
$
i
n
c
p
a
t
h
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
)
 
f
a
i
l
e
d
 
t
o
 
o
p
e
n
 
s
t
r
e
a
m
:
 
N
o
 
s
u
c
h
 
f
i
l
e
 
o
r
 
d
i
r
e
c
t
o
r
y
'
,
 
E
_
U
S
E
R
_
W
A
R
N
I
N
G
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
c
l
e
a
r
s
t
a
t
c
a
c
h
e
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
f
s
i
z
e
 
=
=
 
@
f
i
l
e
s
i
z
e
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
=
 
f
r
e
a
d
(
$
f
h
,
 
$
f
s
i
z
e
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
a
t
a
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
!
f
e
o
f
(
$
f
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
.
=
 
f
r
e
a
d
(
$
f
h
,
 
8
1
9
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
f
c
l
o
s
e
(
$
f
h
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
a
t
a
;

 
 
 
 
}

}


/
*
*

 
*
 
D
e
l
e
t
e
 
a
l
l
 
f
i
l
e
s
 
a
n
d
 
s
u
b
d
i
r
e
c
t
o
r
i
e
s
 
i
n
 
a
 
d
i
r
e
c
t
o
r
y

 
*
/

f
u
n
c
t
i
o
n
 
e
m
p
t
y
D
i
r
(
$
d
i
r
,
 
$
r
o
o
t
 
=
 
n
u
l
l
)

{

 
 
 
 
i
f
 
(
$
r
o
o
t
 
=
=
 
n
u
l
l
)
 
{

 
 
 
 
 
 
 
 
$
r
o
o
t
 
=
 
$
d
i
r
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
$
d
h
 
=
 
@
o
p
e
n
d
i
r
(
$
d
i
r
)
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

 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
o
b
j
 
=
 
r
e
a
d
d
i
r
(
$
d
h
)
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
o
b
j
 
=
=
 
'
.
'
 
|
|
 
$
o
b
j
 
=
=
 
'
.
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
o
n
t
i
n
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
@
u
n
l
i
n
k
(
$
d
i
r
.
'
/
'
.
$
o
b
j
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
$
d
i
r
.
'
/
'
.
$
o
b
j
,
 
$
r
o
o
t
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
c
l
o
s
e
d
i
r
(
$
d
h
)
;

 
 
 
 
i
f
 
(
$
d
i
r
 
!
=
 
$
r
o
o
t
)
 
{

 
 
 
 
 
 
 
 
@
r
m
d
i
r
(
$
d
i
r
)
;

 
 
 
 
}

}


/
*

D
o
e
s
 
w
h
a
t
 
i
t
 
s
a
y
s
 
o
n
 
t
h
e
 
t
i
n

*
/

f
u
n
c
t
i
o
n
 
d
r
o
p
P
l
u
g
i
n
(
$
p
l
u
g
i
n
N
a
m
e
)

{

 
 
 
 
$
p
l
u
g
i
n
P
a
t
h
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
;

 
 
 
 
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
$
p
l
u
g
i
n
P
a
t
h
.
J
R
D
S
.
'
p
l
u
g
i
n
_
u
n
i
n
s
t
a
l
l
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
N
S
T
A
L
L
E
R
'
,
 
1
)
;

 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
$
p
l
u
g
i
n
P
a
t
h
.
J
R
D
S
.
'
p
l
u
g
i
n
_
u
n
i
n
s
t
a
l
l
.
p
h
p
'
;

 
 
 
 
}

 
 
 
 
e
m
p
t
y
D
i
r
(
$
p
l
u
g
i
n
P
a
t
h
)
;

	
i
f
 
(
i
s
_
d
i
r
(
$
p
l
u
g
i
n
P
a
t
h
)
)
 
{

	
	
r
m
d
i
r
(
$
p
l
u
g
i
n
P
a
t
h
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
P
a
t
h
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
;

 
 
 
 
 
 
 
 
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
$
p
l
u
g
i
n
P
a
t
h
.
J
R
D
S
.
'
p
l
u
g
i
n
_
u
n
i
n
s
t
a
l
l
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
N
S
T
A
L
L
E
R
'
,
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
$
p
l
u
g
i
n
P
a
t
h
.
J
R
D
S
.
'
p
l
u
g
i
n
_
u
n
i
n
s
t
a
l
l
.
p
h
p
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
$
p
l
u
g
i
n
P
a
t
h
)
;

 
 
 
 
 
 
 
 
i
f
 
(
r
m
d
i
r
(
$
p
l
u
g
i
n
P
a
t
h
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
*

D
o
e
s
 
w
h
a
t
 
i
t
 
s
a
y
s
 
o
n
 
t
h
e
 
t
i
n

*
/

f
u
n
c
t
i
o
n
 
q
u
e
r
y
U
p
d
a
t
e
S
e
r
v
e
r
(
$
s
c
r
i
p
t
,
 
$
q
u
e
r
y
S
t
r
i
n
g
,
 
$
s
e
r
v
e
r
T
y
p
e
 
=
 
'
p
l
u
g
i
n
'
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


 
 
 
 
i
f
 
(
$
s
e
r
v
e
r
T
y
p
e
 
=
=
 
'
p
l
u
g
i
n
'
)
 
{

 
 
 
 
 
 
 
 
$
u
p
d
a
t
e
S
e
r
v
e
r
 
=
 
'
h
t
t
p
:
/
/
p
l
u
g
i
n
s
.
j
o
m
r
e
s
4
.
n
e
t
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
u
p
d
a
t
e
S
e
r
v
e
r
 
=
 
'
h
t
t
p
:
/
/
u
p
d
a
t
e
s
.
j
o
m
r
e
s
4
.
n
e
t
'
;

 
 
 
 
}


 
 
 
 
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
s
c
r
i
p
t
)
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
$
s
c
r
i
p
t
 
=
 
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
'
;

 
 
 
 
}

	

	
$
r
e
s
p
o
n
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
_
s
t
r
i
n
g
 
=
 
$
s
c
r
i
p
t
.
'
?
'
.
$
q
u
e
r
y
S
t
r
i
n
g
.
'
&
j
o
m
r
e
s
v
e
r
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
v
e
r
s
i
o
n
'
 
]
.
'
&
h
o
s
t
n
a
m
e
=
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
;


	
t
r
y
 
{

	
	
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
u
p
d
a
t
e
S
e
r
v
e
r

	
	
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
u
p
d
a
t
e
S
e
r
v
e
r
.
'
/
'
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

	
}

	
c
a
t
c
h
 
(
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
 
q
u
e
r
y
 
t
h
e
 
u
p
d
a
t
e
s
 
s
e
r
v
e
r
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
s
p
o
n
s
e
;

}


/
/
 
h
t
t
p
:
/
/
w
w
w
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
r
e
n
a
m
e
.
p
h
p
#
6
1
1
5
2

/
*
*

 
*
 
M
o
v
e
s
 
t
h
e
 
c
o
n
t
e
n
t
s
 
o
f
 
s
o
u
r
c
e
 
d
i
r
 
t
o
 
d
e
s
t
i
n
a
t
i
o
n
 
d
i
r

 
*
/

f
u
n
c
t
i
o
n
 
d
i
r
c
o
p
y
(
$
s
o
u
r
c
e
,
 
$
d
e
s
t
,
 
$
o
v
e
r
w
r
i
t
e
 
=
 
t
r
u
e
,
 
$
f
u
n
c
l
o
c
 
=
 
n
u
l
l
)

{

 
 
 
 
g
l
o
b
a
l
 
$
c
o
p
i
e
d
F
i
l
e
L
o
g
;

 
 
 
 
$
d
e
b
u
g
g
i
n
g
 
=
 
t
r
u
e
;

 
 
 
 
$
c
o
p
i
e
d
F
i
l
e
L
o
g
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
/
/
$
s
u
c
c
e
s
s
=
t
r
u
e
;

 
 
 
 
/
*

 
 
 
 
 
 
 
 
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
f
u
n
c
l
o
c
)
)

 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
s
t
 
.
=
 
'
/
'
 
.
 
s
t
r
r
e
v
(
s
u
b
s
t
r
(
s
t
r
r
e
v
(
$
s
o
u
r
c
e
)
,
 
0
,
 
s
t
r
p
o
s
(
s
t
r
r
e
v
(
$
s
o
u
r
c
e
)
,
 
n
u
l
l
)
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
n
c
l
o
c
 
=
 
'
/
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
*
/

 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
d
e
s
t
.
$
f
u
n
c
l
o
c
)
)
 
{

 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
d
e
s
t
.
$
f
u
n
c
l
o
c
)
;

 
 
 
 
}
 
/
/
 
m
a
k
e
 
s
u
b
d
i
r
e
c
t
o
r
y
 
b
e
f
o
r
e
 
s
u
b
d
i
r
e
c
t
o
r
y
 
i
s
 
c
o
p
i
e
d

 
 
 
 
/
/
e
c
h
o
 
"
O
p
e
n
i
n
g
 
"
 
.
 
$
s
o
u
r
c
e
 
.
 
$
f
u
n
c
l
o
c
.
"
<
b
r
/
>
"
;

 
 
 
 
i
f
 
(
$
h
a
n
d
l
e
 
=
 
o
p
e
n
d
i
r
(
$
s
o
u
r
c
e
.
$
f
u
n
c
l
o
c
)
)
 
{
 
/
/
 
i
f
 
t
h
e
 
f
o
l
d
e
r
 
e
x
p
l
o
r
a
t
i
o
n
 
i
s
 
s
u
c
s
e
s
s
f
u
l
,
 
c
o
n
t
i
n
u
e

 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
"
O
p
e
n
e
d
 
"
.
 
$
s
o
u
r
c
e
 
.
 
$
f
u
n
c
l
o
c
.
"
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
f
i
l
e
 
=
 
r
e
a
d
d
i
r
(
$
h
a
n
d
l
e
)
)
)
 
{
 
/
/
 
a
s
 
l
o
n
g
 
a
s
 
s
t
o
r
i
n
g
 
t
h
e
 
n
e
x
t
 
f
i
l
e
 
t
o
 
$
f
i
l
e
 
i
s
 
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
,
 
c
o
n
t
i
n
u
e

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
 
!
=
 
'
.
'
 
&
&
 
$
f
i
l
e
 
!
=
 
'
.
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
 
=
 
$
s
o
u
r
c
e
.
$
f
u
n
c
l
o
c
.
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
2
 
=
 
$
d
e
s
t
.
$
f
u
n
c
l
o
c
.
$
f
i
l
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
f
i
l
e
(
$
p
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
c
o
p
y
(
$
p
a
t
h
,
 
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
F
i
l
e
 
'
.
$
p
a
t
h
.
'
 
c
o
u
l
d
 
n
o
t
 
b
e
 
m
o
v
e
d
 
t
o
 
'
.
$
p
a
t
h
2
.
'
,
 
l
i
k
e
l
y
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
u
c
c
e
s
s
'
 
=
>
 
f
a
l
s
e
,
 
'
e
r
r
o
r
m
s
g
'
 
=
>
 
$
m
e
s
s
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
i
s
_
d
i
r
(
$
p
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
i
r
c
o
p
y
(
$
s
o
u
r
c
e
,
 
$
d
e
s
t
,
 
$
o
v
e
r
w
r
i
t
e
,
 
$
f
u
n
c
l
o
c
.
$
f
i
l
e
.
J
R
D
S
)
;
 
/
/
r
e
c
u
r
s
e
!

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
r
m
d
i
r
(
 
$
p
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
h
a
n
d
l
e
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
d
e
b
u
g
g
i
n
g
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
c
o
p
i
e
d
F
i
l
e
L
o
g
 
a
s
 
$
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
m
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
s
u
c
c
e
s
s
'
 
=
>
 
t
r
u
e
,
 
'
e
r
r
o
r
m
s
g
'
 
=
>
 
'
'
)
;

 
 
 
 
/
/
e
c
h
o
 
"
F
i
n
i
s
h
e
d
 
u
p
g
r
a
d
e
 
<
b
r
/
>
"
;

}
 
/
/
 
e
n
d
 
o
f
 
d
i
r
c
o
p
y
(
)


/
/
 
h
t
t
p
:
/
/
w
w
w
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
r
e
n
a
m
e
.
p
h
p
#
6
1
1
5
2

/
*
*

 
*
 
M
o
v
e
s
 
t
h
e
 
c
o
n
t
e
n
t
s
 
o
f
 
s
o
u
r
c
e
 
d
i
r
 
t
o
 
d
e
s
t
i
n
a
t
i
o
n
 
d
i
r

 
*
/

f
u
n
c
t
i
o
n
 
d
i
r
m
v
(
$
s
o
u
r
c
e
,
 
$
d
e
s
t
,
 
$
o
v
e
r
w
r
i
t
e
 
=
 
t
r
u
e
,
 
$
f
u
n
c
l
o
c
 
=
 
J
R
D
S
)

{

 
 
 
 
g
l
o
b
a
l
 
$
m
o
v
e
d
F
i
l
e
L
o
g
;

 
 
 
 
$
d
e
b
u
g
g
i
n
g
 
=
 
f
a
l
s
e
;

 
 
 
 
$
m
o
v
e
d
F
i
l
e
L
o
g
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
/
/
$
s
u
c
c
e
s
s
=
t
r
u
e
;

 
 
 
 
/
*

 
 
 
 
 
 
 
 
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
f
u
n
c
l
o
c
)
)

 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
s
t
 
.
=
 
'
/
'
 
.
 
s
t
r
r
e
v
(
s
u
b
s
t
r
(
s
t
r
r
e
v
(
$
s
o
u
r
c
e
)
,
 
0
,
 
s
t
r
p
o
s
(
s
t
r
r
e
v
(
$
s
o
u
r
c
e
)
,
 
n
u
l
l
)
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
n
c
l
o
c
 
=
 
'
/
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
*
/

 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
d
e
s
t
.
$
f
u
n
c
l
o
c
)
)
 
{

 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
d
e
s
t
.
$
f
u
n
c
l
o
c
)
;

 
 
 
 
}
 
/
/
 
m
a
k
e
 
s
u
b
d
i
r
e
c
t
o
r
y
 
b
e
f
o
r
e
 
s
u
b
d
i
r
e
c
t
o
r
y
 
i
s
 
c
o
p
i
e
d

 
 
 
 
/
/
e
c
h
o
 
"
O
p
e
n
i
n
g
 
"
 
.
 
$
s
o
u
r
c
e
 
.
 
$
f
u
n
c
l
o
c
.
"
<
b
r
/
>
"
;

 
 
 
 
i
f
 
(
$
h
a
n
d
l
e
 
=
 
o
p
e
n
d
i
r
(
$
s
o
u
r
c
e
.
$
f
u
n
c
l
o
c
)
)
 
{
 
/
/
 
i
f
 
t
h
e
 
f
o
l
d
e
r
 
e
x
p
l
o
r
a
t
i
o
n
 
i
s
 
s
u
c
s
e
s
s
f
u
l
,
 
c
o
n
t
i
n
u
e

 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
"
O
p
e
n
e
d
 
"
.
 
$
s
o
u
r
c
e
 
.
 
$
f
u
n
c
l
o
c
.
"
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
f
i
l
e
 
=
 
r
e
a
d
d
i
r
(
$
h
a
n
d
l
e
)
)
)
 
{
 
/
/
 
a
s
 
l
o
n
g
 
a
s
 
s
t
o
r
i
n
g
 
t
h
e
 
n
e
x
t
 
f
i
l
e
 
t
o
 
$
f
i
l
e
 
i
s
 
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
,
 
c
o
n
t
i
n
u
e

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
 
!
=
 
'
.
'
 
&
&
 
$
f
i
l
e
 
!
=
 
'
.
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
 
=
 
$
s
o
u
r
c
e
.
$
f
u
n
c
l
o
c
.
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
2
 
=
 
$
d
e
s
t
.
$
f
u
n
c
l
o
c
.
$
f
i
l
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
f
i
l
e
(
$
p
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
f
i
l
e
(
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
r
e
n
a
m
e
(
$
p
a
t
h
,
 
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
p
y
(
$
o
l
d
f
i
l
e
,
 
$
n
e
w
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
$
o
l
d
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
F
i
l
e
 
(
'
.
$
p
a
t
h
.
'
)
 
c
o
u
l
d
 
n
o
t
 
b
e
 
m
o
v
e
d
 
t
o
 
 
'
.
$
p
a
t
h
2
.
'
,
 
l
i
k
e
l
y
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
u
c
c
e
s
s
'
 
=
>
 
f
a
l
s
e
,
 
'
e
r
r
o
r
m
s
g
'
 
=
>
 
'
F
i
l
e
 
(
'
.
$
p
a
t
h
.
'
)
 
c
o
u
l
d
 
n
o
t
 
b
e
 
m
o
v
e
d
,
 
l
i
k
e
l
y
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
o
v
e
r
w
r
i
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
u
n
l
i
n
k
(
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
U
n
a
b
l
e
 
t
o
 
o
v
e
r
w
r
i
t
e
 
f
i
l
e
 
(
"
'
.
$
p
a
t
h
2
.
'
"
)
,
 
l
i
k
e
l
y
 
t
o
 
b
e
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
<
b
r
/
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
u
c
c
e
s
s
'
 
=
>
 
f
a
l
s
e
,
 
'
e
r
r
o
r
m
s
g
'
 
=
>
 
'
U
n
a
b
l
e
 
t
o
 
o
v
e
r
w
r
i
t
e
 
f
i
l
e
 
(
"
'
.
$
p
a
t
h
2
.
'
"
)
,
 
l
i
k
e
l
y
 
t
o
 
b
e
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
<
b
r
/
>
'
)
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
!
@
r
e
n
a
m
e
(
$
p
a
t
h
,
 
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
F
i
l
e
 
(
'
.
$
p
a
t
h
.
'
)
 
c
o
u
l
d
 
n
o
t
 
b
e
 
m
o
v
e
d
 
w
h
i
l
e
 
o
v
e
r
w
r
i
t
t
i
n
g
,
 
l
i
k
e
l
y
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
<
/
f
o
n
t
>
<
b
r
/
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
u
c
c
e
s
s
'
 
=
>
 
f
a
l
s
e
,
 
'
e
r
r
o
r
m
s
g
'
 
=
>
 
'
F
i
l
e
 
(
'
.
$
p
a
t
h
.
'
)
 
c
o
u
l
d
 
n
o
t
 
b
e
 
m
o
v
e
d
 
w
h
i
l
e
 
o
v
e
r
w
r
i
t
t
i
n
g
,
 
l
i
k
e
l
y
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
<
b
r
/
>
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
m
o
v
e
d
F
i
l
e
L
o
g
[
 
]
 
=
 
'
M
o
v
e
d
 
'
.
$
p
a
t
h
.
'
<
b
r
/
>
 
t
o
 
'
.
$
p
a
t
h
2
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
N
o
t
 
a
l
l
o
w
e
d
 
t
o
 
o
v
e
r
w
r
i
t
e
'
.
$
p
a
t
h
2
.
'
<
b
r
/
>
'
;
 
/
/
 
N
o
t
 
t
e
c
h
n
i
c
a
l
l
y
 
a
n
 
e
r
r
o
r
 
m
e
s
s
a
g
e
,
 
j
u
s
t
 
a
d
v
i
s
o
r
y

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
i
s
_
d
i
r
(
$
p
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
i
r
m
v
(
$
s
o
u
r
c
e
,
 
$
d
e
s
t
,
 
$
o
v
e
r
w
r
i
t
e
,
 
$
f
u
n
c
l
o
c
.
$
f
i
l
e
.
J
R
D
S
)
;
 
/
/
r
e
c
u
r
s
e
!

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
m
d
i
r
(
$
p
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
h
a
n
d
l
e
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
d
e
b
u
g
g
i
n
g
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
m
o
v
e
d
F
i
l
e
L
o
g
 
a
s
 
$
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
m
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
s
u
c
c
e
s
s
'
 
=
>
 
t
r
u
e
,
 
'
e
r
r
o
r
m
s
g
'
 
=
>
 
'
'
)
;

 
 
 
 
/
/
e
c
h
o
 
"
F
i
n
i
s
h
e
d
 
u
p
g
r
a
d
e
 
<
b
r
/
>
"
;

}
 
/
/
 
e
n
d
 
o
f
 
d
i
r
m
v
(
)


/
*

A
l
l
o
w
s
 
u
s
 
t
o
 
w
o
r
k
 
i
n
d
e
p
e
n
d
a
n
t
l
y
 
o
f
 
J
o
o
m
l
a
 
o
r
 
M
a
m
b
o
'
s
 
e
m
a
i
l
e
r
s

*
/

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
M
a
i
l
e
r
(
$
f
r
o
m
,
 
$
j
o
m
r
e
s
C
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
n
a
m
e
,
 
$
t
o
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
b
o
d
y
,
 
$
m
o
d
e
 
=
 
1
,
 
$
a
t
t
a
c
h
m
e
n
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
,
 
$
d
e
b
u
g
g
i
n
g
 
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
f
r
o
m
 
=
=
 
'
'
)
 
{

	
	
$
f
r
o
m
 
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

	
}


 
 
 
 
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
e
n
d
i
n
g
 
e
m
a
i
l
 
f
r
o
m
 
'
.
$
f
r
o
m
.
'
 
t
o
 
'
.
$
t
o
.
'
 
s
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
,
 
'
M
a
i
l
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
e
m
a
i
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
o
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
t
o
 
a
s
 
$
t
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
t
)
 
>
 
0
)
 
{

	
	
	
	
$
e
m
a
i
l
s
[
 
]
 
=
 
t
r
i
m
(
$
t
)
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
s
t
r
p
o
s
(
$
t
o
,
 
'
,
'
)
)
 
{
 
/
/
 
w
e
'
v
e
 
b
e
e
n
 
p
a
s
s
e
d
 
a
 
c
o
m
m
a
 
s
e
p
a
r
a
t
e
d
 
l
i
s
t
 
o
f
 
e
m
a
i
l
s
,
 
e
x
p
l
o
d
e
 
t
h
e
m
 
t
h
e
n
 
p
a
r
s
e
 
t
h
e
m

	
	
	
$
a
d
d
y
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
,
'
,
 
$
t
o
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
a
d
d
y
s
 
a
s
 
$
t
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
t
)
 
>
 
0
)
 
{

	
	
	
	
	
$
e
m
a
i
l
s
[
 
]
 
=
 
t
r
i
m
(
$
t
)
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
s
t
r
l
e
n
(
$
t
o
)
 
>
 
0
)
 
{

	
	
	
	
$
e
m
a
i
l
s
[
 
]
 
=
 
t
r
i
m
(
$
t
o
)
;

	
	
	
}

	
	
}

	
}

 
 
 
 

	
t
r
y
 
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
G
L
O
B
A
L
S
[
'
d
e
b
u
g
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
G
L
O
B
A
L
S
[
'
d
e
b
u
g
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
m
a
i
l
 
=
 
n
e
w
 
P
H
P
M
a
i
l
e
r
\
P
H
P
M
a
i
l
e
r
\
P
H
P
M
a
i
l
e
r
(
t
r
u
e
)
;

	
	

	
	
$
m
a
i
l
-
>
C
h
a
r
S
e
t
 
=
 
'
U
T
F
-
8
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
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
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
m
a
i
l
-
>
M
a
i
l
e
r
 
=
 
'
s
m
t
p
'
;

	
	
	
$
m
a
i
l
-
>
I
s
S
M
T
P
(
)
;
 
/
/
 
t
e
l
l
i
n
g
 
t
h
e
 
c
l
a
s
s
 
t
o
 
u
s
e
 
S
M
T
P

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
H
o
s
t
 
=
 
t
r
i
m
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
P
o
r
t
 
=
 
t
r
i
m
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
S
M
T
P
S
e
c
u
r
e
 
=
 
t
r
i
m
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
S
M
T
P
A
u
t
h
 
=
 
t
r
i
m
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
U
s
e
r
n
a
m
e
 
=
 
t
r
i
m
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
r
n
a
m
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
P
a
s
s
w
o
r
d
 
=
 
t
r
i
m
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
a
s
s
w
o
r
d
'
 
]
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
M
a
i
l
e
r
 
=
 
t
r
i
m
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
e
r
'
)
)
;

	
	
	

	
	
	
i
f
 
(
$
m
a
i
l
-
>
M
a
i
l
e
r
 
=
=
 
'
s
m
t
p
'
)
 
{

	
	
	
	
$
m
a
i
l
-
>
I
s
S
M
T
P
(
)
;
 
/
/
 
t
e
l
l
i
n
g
 
t
h
e
 
c
l
a
s
s
 
t
o
 
u
s
e
 
S
M
T
P

	
	
	
}

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
H
o
s
t
 
=
 
t
r
i
m
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
s
m
t
p
h
o
s
t
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
P
o
r
t
 
=
 
t
r
i
m
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
s
m
t
p
p
o
r
t
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
S
M
T
P
S
e
c
u
r
e
 
=
 
t
r
i
m
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
s
m
t
p
s
e
c
u
r
e
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
S
M
T
P
A
u
t
h
 
=
 
t
r
i
m
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
s
m
t
p
a
u
t
h
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
U
s
e
r
n
a
m
e
 
=
 
t
r
i
m
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
s
m
t
p
u
s
e
r
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
P
a
s
s
w
o
r
d
 
=
 
t
r
i
m
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
s
m
t
p
p
a
s
s
'
)
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
m
a
i
l
-
>
S
M
T
P
D
e
b
u
g
 
=
 
2
;

 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
D
e
b
u
g
o
u
t
p
u
t
 
=
 
f
u
n
c
t
i
o
n
 
(
$
s
t
r
,
 
$
l
e
v
e
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
G
L
O
B
A
L
S
[
'
d
e
b
u
g
'
]
 
.
=
 
"
$
l
e
v
e
l
:
 
$
s
t
r
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
}
;


 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
T
i
m
e
o
u
t
 
=
 
3
0
0
;

	
	

	
	
$
m
a
i
l
-
>
S
M
T
P
A
u
t
o
T
L
S
 
=
 
f
a
l
s
e
;

	
	

	
	
/
/
n
o
t
 
r
e
c
o
m
m
e
n
d
e
d
,
 
b
u
t
 
i
t
`
s
 
h
e
r
e
 
f
o
r
 
c
a
s
e
s
 
w
h
e
n
 
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
 
a
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
.
 
S
o
m
e
 
h
o
s
t
i
n
g
 
p
r
o
v
i
d
e
r
s
 
s
t
i
l
l
 
d
o
 
t
h
i
s
.
.

	
	
$
m
a
i
l
-
>
S
M
T
P
O
p
t
i
o
n
s
 
=
 
a
r
r
a
y
(

	
	
'
s
s
l
'
 
=
>
 
a
r
r
a
y
(

	
	
	
'
v
e
r
i
f
y
_
p
e
e
r
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
v
e
r
i
f
y
_
p
e
e
r
_
n
a
m
e
'
 
=
>
 
f
a
l
s
e
,

	
	
	
'
a
l
l
o
w
_
s
e
l
f
_
s
i
g
n
e
d
'
 
=
>
 
t
r
u
e

	
	
	
)

	
	
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
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
s
e
t
F
r
o
m
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
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
'
 
]
,
 
$
j
o
m
r
e
s
C
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
n
a
m
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
s
e
t
F
r
o
m
(
$
f
r
o
m
,
 
$
j
o
m
r
e
s
C
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
n
a
m
e
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
$
m
o
d
e
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
I
s
H
T
M
L
(
t
r
u
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
d
y
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
"
[
\
\
\
]
"
,
 
'
'
,
 
$
b
o
d
y
)
;


 
 
 
 
 
 
 
 
/
/
i
f
 
(
$
m
o
d
e
 
=
=
 
1
 
&
&
 
!
s
t
r
s
t
r
(
$
b
o
d
y
,
 
'
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
C
o
n
t
e
n
t
-
T
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
 
u
t
f
-
8
"
 
/
>
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
b
o
d
y
 
=
 
p
r
e
g
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
@
(
h
t
t
p
s
?
:
/
/
(
[
-
\
w
\
.
]
+
[
-
\
w
]
)
+
(
:
\
d
+
)
?
(
/
(
[
\
w
/
_
\
.
#
-
]
*
(
\
?
\
S
+
)
?
[
^
\
.
\
s
]
)
?
)
?
)
@
'
,
 
'
<
a
 
h
r
e
f
=
"
$
1
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
$
1
<
/
a
>
'
,
 
$
b
o
d
y
 
)
;

 
 
 
 
 
 
 
 
/
/
}


	
	
$
m
a
i
l
-
>
B
o
d
y
 
=
 
$
b
o
d
y
;

 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
S
u
b
j
e
c
t
 
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
s
u
b
j
e
c
t
)
;

 
 
 
 
 
 
 
 
/
/
$
m
a
i
l
-
>
A
l
t
B
o
d
y
 
=
 
s
t
r
i
p
_
t
a
g
s
(
$
b
o
d
y
)
;
 
/
/
c
o
n
t
e
n
t
 
f
o
r
 
n
o
n
-
H
T
M
L
 
e
m
a
i
l
 
c
l
i
e
n
t
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
t
t
a
c
h
m
e
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
a
t
t
a
c
h
m
e
n
t
s
 
a
s
 
$
a
t
t
a
c
h
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
a
t
t
a
c
h
m
e
n
t
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
 
/
/
 
U
s
e
 
a
 
s
w
i
t
c
h
 
a
s
 
i
t
 
a
l
l
o
w
s
 
u
s
 
t
o
 
e
x
p
a
n
d
 
t
h
i
s
 
l
a
t
e
r
 
i
f
 
w
e
 
w
i
s
h

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
i
m
a
g
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
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
J
R
D
S
,
 
$
a
t
t
a
c
h
m
e
n
t
[
 
'
i
m
a
g
e
_
p
a
t
h
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
n
a
m
e
 
=
 
$
i
m
a
g
e
_
a
r
r
 
[
 
c
o
u
n
t
(
$
i
m
a
g
e
_
a
r
r
)
 
-
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
p
a
t
h
 
=
 
$
a
t
t
a
c
h
m
e
n
t
[
 
'
i
m
a
g
e
_
p
a
t
h
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
i
d
 
=
 
$
a
t
t
a
c
h
m
e
n
t
[
 
'
C
I
D
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
a
d
d
E
m
b
e
d
d
e
d
I
m
a
g
e
(
$
i
m
a
g
e
_
p
a
t
h
,
 
$
c
i
d
,
 
$
i
m
a
g
e
_
n
a
m
e
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
p
d
f
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
 
=
 
$
a
t
t
a
c
h
m
e
n
t
[
 
'
p
a
t
h
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
a
m
e
 
=
 
$
a
t
t
a
c
h
m
e
n
t
[
 
'
f
i
l
e
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
a
d
d
A
t
t
a
c
h
m
e
n
t
(
$
p
a
t
h
,
 
$
n
a
m
e
,
 
'
b
a
s
e
6
4
'
,
 
$
t
y
p
e
 
=
 
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
/
p
d
f
'
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
p
a
t
h
 
=
 
$
a
t
t
a
c
h
m
e
n
t
[
 
'
p
a
t
h
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
a
m
e
 
=
 
$
a
t
t
a
c
h
m
e
n
t
[
 
'
f
i
l
e
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
y
p
e
 
=
 
$
a
t
t
a
c
h
m
e
n
t
[
'
t
y
p
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
a
d
d
A
t
t
a
c
h
m
e
n
t
(
$
p
a
t
h
,
 
$
n
a
m
e
,
 
'
b
a
s
e
6
4
'
,
 
$
t
y
p
e
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
e
m
a
i
l
s
 
a
s
 
$
t
o
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
t
o
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
a
d
d
A
d
d
r
e
s
s
(
$
t
o
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
m
a
i
l
-
>
S
e
n
d
(
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
E
m
a
i
l
 
s
e
n
t
 
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
,
 
'
M
a
i
l
e
r
'
)
;

 
 
 
 
}
 
c
a
t
c
h
 
(
P
H
P
M
a
i
l
e
r
\
P
H
P
M
a
i
l
e
r
\
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
)
 
{

 
 
 
 
 
 
 
 
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
E
m
a
i
l
 
f
a
i
l
e
d
 
'
.
$
G
L
O
B
A
L
S
[
'
d
e
b
u
g
'
]
,
 
'
M
a
i
l
e
r
'
)
;

 
 
 
 
 
 
 
 
$
G
L
O
B
A
L
S
[
'
d
e
b
u
g
'
]
 
=
 
'
'
;


 
 
 
 
 
 
 
 
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
 
c
a
t
c
h
 
(
\
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
)
 
{

 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
;
 
/
/
B
o
r
i
n
g
 
e
r
r
o
r
 
m
e
s
s
a
g
e
s
 
f
r
o
m
 
a
n
y
t
h
i
n
g
 
e
l
s
e
!

 
 
 
 
 
 
 
 
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


/
*
*

 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
g
u
e
s
t
 
d
e
t
a
i
l
s
 
f
o
r
 
a
 
b
o
o
k
i
n
g
.

 
*
/

f
u
n
c
t
i
o
n
 
a
d
d
B
o
o
k
i
n
g
N
o
t
e
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
,
 
$
m
e
s
s
a
g
e
)

{

 
 
 
 
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
 
>
 
0
 
&
&
 
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
 
>
 
0
 
&
&
 
s
t
r
l
e
n
(
$
m
e
s
s
a
g
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
d
t
 
=
 
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
-
i
-
s
'
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
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
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
`
,
`
n
o
t
e
`
,
`
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
u
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
,
'
"
.
R
e
m
o
v
e
X
S
S
(
$
m
e
s
s
a
g
e
)
.
"
'
,
'
$
d
t
'
,
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
)
"
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
b
o
o
k
i
n
g
_
n
o
t
e
_
s
a
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
 
b
o
o
k
i
n
g
 
n
o
t
e
s
 
a
r
e
 
a
d
d
e
d
/
e
d
i
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
n
o
t
e
_
i
d
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
e
s
u
l
t
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
 
$
r
e
s
u
l
t
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


/
*
*

 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
g
u
e
s
t
 
d
e
t
a
i
l
s
 
f
o
r
 
a
 
b
o
o
k
i
n
g
.

 
*
/

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
G
u
e
s
t
D
e
t
a
i
l
s
F
o
r
C
o
n
t
r
a
c
t
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
!
e
m
p
t
y
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
 
L
I
M
I
T
 
1
 
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
v
t
i
t
l
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
G
U
E
S
T
T
Y
P
E
'
.
(
i
n
t
)
 
$
v
u
,
 
$
v
t
i
t
l
e
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
o
r
t
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
 
a
r
r
a
y
(
)
;

 
 
 
 
}

}


/
*
*

 
*
 
C
c
o
n
s
t
r
u
c
t
 
d
a
t
a
 
f
r
o
m
 
s
e
s
s
i
o
n
 
v
a
r
i
a
b
l
e
s
.

 
*
/

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
C
u
r
r
e
n
t
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
(
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
'
'
)

{

 
 
 
 
/
/
 
W
h
i
l
s
t
 
t
h
i
s
 
i
s
 
a
 
n
e
w
 
f
u
n
c
t
i
o
n
 
t
o
 
c
o
n
s
t
r
u
c
t
 
d
a
t
a
 
f
r
o
m
 
s
e
s
s
i
o
n
 
v
a
r
i
a
b
l
e
s
,
 
w
e
'
l
l
 
n
e
e
d
 
t
o
 
d
o
 
a
 
b
u
n
c
h
 
o
f
 
j
i
g
g
e
r
y
 
p
o
k
e
r
y
 
w
i
t
h
 
t
h
e
 
n
i
c
e
 
s
i
m
p
l
e
 
d
a
t
a
 
p
u
l
l
e
d
 
f
r
o
m
 
t
h
e
 
s
e
s
s
 
v
a
r
s
 
s
o
 
t
h
a
t
 
t
h
e
 
d
a
t
a
 
i
s
 
i
n
 
a
 
f
o
r
m
a
t
 
t
h
a
t
'
s
 
u
n
d
e
r
s
t
o
o
d
 
b
y
 
o
t
h
e
r
 
f
u
n
c
t
i
o
n
s
 
t
h
a
t
 
p
r
e
v
i
o
u
s
l
y
 
r
e
c
e
i
v
e
d
 
d
a
t
a
 
t
h
a
t
 
h
a
d
 
b
e
e
n
 
p
u
l
l
e
d
 
f
r
o
m
 
t
h
e
 
d
a
t
a
b
a
s
e


 
 
 
 
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
t
e
m
p
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
L
i
s
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
u
s
e
r
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

 
 
 
 
$
g
u
e
s
t
D
e
t
a
i
l
s
 
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
D
e
e
t
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
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
t
a
i
l
s
-
>
$
k
e
y
 
=
 
$
v
a
l
;

 
 
 
 
}

 
 
 
 
$
b
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
b
o
o
k
i
n
g
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
b
o
o
k
i
n
g
D
e
e
t
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
$
b
o
b
j
-
>
$
k
e
y
 
=
 
$
v
a
l
;

 
 
 
 
}

 
 
 
 
$
t
e
m
p
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
L
i
s
t
[
 
0
 
]
 
=
 
$
b
o
b
j
;

 
 
 
 
$
o
b
j
-
>
g
u
e
s
t
D
e
t
a
i
l
s
 
=
 
$
g
u
e
s
t
D
e
t
a
i
l
s
;

 
 
 
 
$
o
b
j
-
>
t
e
m
p
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
L
i
s
t
 
=
 
$
t
e
m
p
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
L
i
s
t
;

 
 
 
 
$
a
r
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
o
b
 
=
 
$
t
e
m
p
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
L
i
s
t
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
o
b
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
o
b
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
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

 
 
 
 
$
o
b
j
-
>
t
e
m
p
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
A
r
r
a
y
 
=
 
$
a
r
r
;


 
 
 
 
r
e
t
u
r
n
 
$
o
b
j
;

}


/
*
*

 
*
 
R
e
t
u
r
n
s
 
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
 
d
e
t
a
i
l
s
 
f
r
o
m
 
t
h
e
 
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
 
s
e
s
s
i
o
n
 
d
a
t
a
.

 
*
/

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
t
e
m
p
B
o
o
k
i
n
g
d
a
t
a
(
)

{

 
 
 
 
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
b
o
o
k
i
n
g
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
b
o
o
k
i
n
g
D
e
e
t
s
;

}


/
*
*

 
*
 
I
n
s
e
r
t
s
 
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
 
m
a
n
a
g
e
r
/
p
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
 
i
n
t
o
 
t
h
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
 
R
e
c
e
i
v
e
s
 
a
 
p
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
r
r
a
y
 
w
h
i
c
h
 
i
s
 
a
 
l
i
s
t
 
o
f
 
t
h
e
 
u
s
e
r
s
 
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
i
e
s
 
a
n
d
 
u
p
d
a
t
e
s
 
t
h
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
 
t
o
 
t
h
a
t
 
e
f
f
e
c
t

 
*
 
I
f
 
t
h
e
 
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
s
 
i
s
 
e
m
p
t
y
 
t
h
e
n
 
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
 
w
i
l
l
 
l
o
o
s
e
 
a
l
l
 
a
c
c
e
s
s
 
t
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
,
 
s
o
 
e
n
s
u
r
e
 
t
h
a
t
 
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
s
 
c
o
n
t
a
i
n
s
 
a
l
l
 
o
f
 
t
h
e
 
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
i
e
s
 
t
h
a
t
 
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
 
h
a
s
 
r
i
g
h
t
s
 
t
o
 
b
e
f
o
r
e
 
p
a
s
s
i
n
g
 
d
a
t
a
 
t
o
 
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
.

 
*
/

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
,
 
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
s
 
=
 
a
r
r
a
y
(
)
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
 
m
a
n
a
g
e
r
 
i
d
 
n
o
t
 
s
e
t
'
)
;

 
 
 
 
}


 
 
 
 
$
c
u
r
r
e
n
t
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
r
o
p
e
r
t
i
e
s
T
o
B
e
R
e
m
o
v
e
d
A
r
r
a
y
 
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
r
o
p
e
r
t
i
e
s
T
o
B
e
A
d
d
e
d
A
r
r
a
y
 
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
m
a
n
a
g
e
r
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
m
a
n
a
g
e
r
_
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
r
e
s
u
l
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
c
u
r
r
e
n
t
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
_
u
i
d
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
c
u
r
r
e
n
t
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
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
c
,
 
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
i
e
s
T
o
B
e
R
e
m
o
v
e
d
A
r
r
a
y
[
 
]
 
=
 
$
c
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
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
p
,
 
$
c
u
r
r
e
n
t
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
i
e
s
T
o
B
e
A
d
d
e
d
A
r
r
a
y
[
]
 
=
 
$
p
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
T
o
B
e
R
e
m
o
v
e
d
A
r
r
a
y
)
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
m
a
n
a
g
e
r
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
m
a
n
a
g
e
r
_
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
.
'
 
A
N
D
 
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
 
I
N
 
(
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
T
o
B
e
R
e
m
o
v
e
d
A
r
r
a
y
)
.
'
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
 
D
e
l
e
t
i
n
g
 
u
s
e
r
`
s
 
u
n
a
s
s
i
g
n
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
a
i
l
e
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
T
o
B
e
A
d
d
e
d
A
r
r
a
y
)
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
m
a
n
a
g
e
r
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
_
x
r
e
f
 
(
`
m
a
n
a
g
e
r
_
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
_
u
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
T
o
B
e
A
d
d
e
d
A
r
r
a
y
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
'
(
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
p
.
'
)
,
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
r
t
r
i
m
(
$
q
u
e
r
y
,
 
'
,
'
)
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
 
I
n
s
e
r
t
i
n
g
 
u
s
e
r
`
s
 
a
s
s
i
g
n
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
a
i
l
e
d
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


/
*
*

 
*
 
H
a
n
d
l
e
s
 
e
r
r
o
r
s
 
g
e
n
e
r
a
t
e
d
 
b
y
 
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
 
r
e
d
i
r
e
c
t
s
 
t
h
e
 
u
s
e
r
 
t
o
 
a
n
 
e
r
r
o
r
 
p
a
g
e
.
 
O
n
l
y
 
u
s
e
d
 
i
f
 
s
y
s
t
e
m
 
i
s
 
s
e
t
 
t
o
 
P
r
o
d
u
c
t
i
o
n
.

 
*
/

f
u
n
c
t
i
o
n
 
e
r
r
o
r
H
a
n
d
l
e
r
(
$
e
r
r
n
o
,
 
$
e
r
r
s
t
r
,
 
$
e
r
r
f
i
l
e
,
 
$
e
r
r
l
i
n
e
,
 
$
e
r
r
c
o
n
t
e
x
t
)

{

 
 
 
 
s
w
i
t
c
h
 
(
$
e
r
r
n
o
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
U
S
E
R
_
W
A
R
N
I
N
G
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
U
S
E
R
_
N
O
T
I
C
E
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
W
A
R
N
I
N
G
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
N
O
T
I
C
E
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
C
O
R
E
_
W
A
R
N
I
N
G
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
C
O
M
P
I
L
E
_
W
A
R
N
I
N
G
:

 
 
 
 
 
 
 
 
 
 
 
 
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
:

 
 
 
 
 
 
 
 
 
 
 
 
r
e
c
o
r
d
E
r
r
o
r
(
$
e
r
r
n
o
,
 
$
e
r
r
s
t
r
,
 
$
e
r
r
f
i
l
e
,
 
$
e
r
r
l
i
n
e
,
 
$
e
r
r
c
o
n
t
e
x
t
)
;

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
E
R
R
O
R
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
P
A
R
S
E
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
C
O
R
E
_
E
R
R
O
R
:

 
 
 
 
 
 
 
 
c
a
s
e
 
E
_
C
O
M
P
I
L
E
_
E
R
R
O
R
:

 
 
 
 
 
 
 
 
 
 
 
 
r
e
c
o
r
d
E
r
r
o
r
(
$
e
r
r
n
o
,
 
$
e
r
r
s
t
r
,
 
$
e
r
r
f
i
l
e
,
 
$
e
r
r
l
i
n
e
,
 
$
e
r
r
c
o
n
t
e
x
t
)
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
 
/
/
 
s
w
i
t
c
h

}
 
/
/
 
e
r
r
o
r
H
a
n
d
l
e
r


/
*
*

 
*
 
P
r
e
t
t
y
 
s
u
r
e
 
t
h
i
s
 
i
s
 
d
e
p
r
e
c
i
a
t
e
d
 
n
o
w

 
*
/

f
u
n
c
t
i
o
n
 
r
e
c
o
r
d
E
r
r
o
r
(
$
e
r
r
n
o
,
 
$
e
r
r
s
t
r
,
 
$
e
r
r
f
i
l
e
,
 
$
e
r
r
l
i
n
e
,
 
$
e
r
r
c
o
n
t
e
x
t
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
e
r
r
o
r
s
t
r
i
n
g
 
=
 
"
F
a
t
a
l
 
E
r
r
o
r
:
 
$
e
r
r
s
t
r
 
(
#
 
$
e
r
r
n
o
)
.
"
;

 
 
 
 
/
/
$
e
r
r
o
r
s
t
r
i
n
g
 
.
=
 
"
U
s
e
r
 
i
d
 
'
$
j
r
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
n
a
m
e
'
&
n
b
s
p
;
&
n
b
s
p
;
.
"
;

 
 
 
 
$
e
r
r
o
r
s
t
r
i
n
g
 
.
=
 
"
E
r
r
o
r
 
i
n
 
l
i
n
e
 
$
e
r
r
l
i
n
e
 
o
f
 
f
i
l
e
 
'
$
e
r
r
f
i
l
e
'
.
"
;

 
 
 
 
$
e
r
r
o
r
s
t
r
i
n
g
 
.
=
 
"
S
c
r
i
p
t
:
 
'
{
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
P
H
P
_
S
E
L
F
'
]
}
'
"
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
e
r
r
c
o
n
t
e
x
t
[
 
'
t
h
i
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
o
b
j
e
c
t
(
$
e
r
r
c
o
n
t
e
x
t
[
 
'
t
h
i
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
n
a
m
e
 
=
 
g
e
t
_
c
l
a
s
s
(
$
e
r
r
c
o
n
t
e
x
t
[
 
'
t
h
i
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
r
e
n
t
c
l
a
s
s
 
=
 
g
e
t
_
p
a
r
e
n
t
_
c
l
a
s
s
(
$
e
r
r
c
o
n
t
e
x
t
[
 
'
t
h
i
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
s
t
r
i
n
g
 
.
=
 
"
O
b
j
e
c
t
/
C
l
a
s
s
:
 
'
$
c
l
a
s
s
n
a
m
e
'
,
 
P
a
r
e
n
t
 
C
l
a
s
s
:
 
'
$
p
a
r
e
n
t
c
l
a
s
s
'
.
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
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
$
e
r
r
o
r
s
t
r
i
n
g
)
;

 
 
 
 
i
f
 
(
!
@
s
e
s
s
i
o
n
_
s
t
a
r
t
(
)
)
 
{

 
 
 
 
 
 
 
 
@
i
n
i
_
s
e
t
(
'
s
e
s
s
i
o
n
.
s
a
v
e
_
h
a
n
d
l
e
r
'
,
 
'
f
i
l
e
s
'
)
;

 
 
 
 
 
 
 
 
s
e
s
s
i
o
n
_
s
t
a
r
t
(
)
;

 
 
 
 
}

 
 
 
 
s
e
s
s
i
o
n
_
u
n
s
e
t
(
)
;

 
 
 
 
s
e
s
s
i
o
n
_
d
e
s
t
r
o
y
(
)
;

 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
e
r
r
o
r
'
)
,
 
'
F
A
T
A
L
 
E
R
R
O
R
'
)
;

}


/
*
*

 
*
 
 
L
e
g
a
c
y
 
f
u
n
c
t
i
o
n
,
 
p
r
e
v
i
o
u
s
l
y
 
w
r
o
t
e
 
t
o
 
w
r
i
t
e
x
m
l
,
 
n
o
w
 
u
s
e
s
 
t
h
e
 
L
o
g
g
e
r
 
c
l
a
s
s
.

 
*
/

f
u
n
c
t
i
o
n
 
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
$
m
e
s
s
a
g
e
,
 
$
e
m
a
i
l
M
e
s
s
a
g
e
 
=
 
t
r
u
e
)

{

 
 
 
 
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
$
m
e
s
s
a
g
e
,
 
'
C
o
r
e
'
,
 
'
E
R
R
O
R
'
)
;

}


/
*
*

 
*
 
 
L
e
g
a
c
y
 
f
u
n
c
t
i
o
n
,
 
p
r
e
v
i
o
u
s
l
y
 
w
r
o
t
e
 
t
o
 
w
r
i
t
e
x
m
l
,
 
n
o
w
 
u
s
e
s
 
t
h
e
 
L
o
g
g
e
r
 
c
l
a
s
s
.

 
*
/

f
u
n
c
t
i
o
n
 
r
e
q
u
e
s
t
_
l
o
g
(
)

{

 
 
 
 
$
l
o
g
 
=
 
'
'
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
_
R
E
Q
U
E
S
T
)
)
 
{

 
 
 
 
 
 
 
 
$
l
o
g
 
.
=
 
'
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
_
R
E
Q
U
E
S
T
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
u
e
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
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
 
.
=
 
$
k
e
y
.
'
 
'
.
$
v
a
l
u
e
.
"
 
-
-
-
 
\
n
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
l
o
g
 
.
=
 
'
'
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
$
l
o
g
,
 
'
R
E
Q
U
E
S
T
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

 
 
 
 
}

}


/
*
*

 
*
 
 
L
e
g
a
c
y
 
f
u
n
c
t
i
o
n
,
 
p
r
e
v
i
o
u
s
l
y
 
w
r
o
t
e
 
t
o
 
w
r
i
t
e
x
m
l
,
 
n
o
w
 
u
s
e
s
 
t
h
e
 
L
o
g
g
e
r
 
c
l
a
s
s
.

 
*
/

f
u
n
c
t
i
o
n
 
s
y
s
t
e
m
_
l
o
g
(
$
m
e
s
s
a
g
e
)

{

 
 
 
 
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
$
m
e
s
s
a
g
e
,
 
'
C
o
r
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

}


/
*
*

 
*
 
L
e
g
a
c
y
 
f
u
n
c
t
i
o
n
,
 
p
r
e
v
i
o
u
s
l
y
 
w
r
o
t
e
 
t
o
 
w
r
i
t
e
x
m
l
,
 
n
o
w
 
u
s
e
s
 
t
h
e
 
L
o
g
g
e
r
 
c
l
a
s
s
.

 
*
/

f
u
n
c
t
i
o
n
 
g
a
t
e
w
a
y
_
l
o
g
(
$
m
e
s
s
a
g
e
)

{

 
 
 
 
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
$
m
e
s
s
a
g
e
,
 
'
G
a
t
e
w
a
y
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

}


/
*
*

 
*
 
 
A
u
d
i
t
 
l
o
g
.

 
*
/

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
a
u
d
i
t
(
$
q
u
e
r
y
,
 
$
o
p
 
=
 
'
'
)

{

 
 
 
 
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
$
q
u
e
r
y
,
 
'
A
u
d
i
t
'
,
 
'
I
N
F
O
'
)
;

}


/
/
 
r
e
d
i
r
e
c
t
 
u
r
l
s
 
m
u
s
t
 
b
e
 
b
a
s
e
6
4
 
e
n
c
o
d
e
d
 
b
e
f
o
r
e
 
t
h
e
y
 
c
a
n
 
b
e
 
u
s
e
d
,
 
o
t
h
e
r
w
i
s
e
 
P
H
P
 
p
a
r
s
e
s
 
t
h
e
 
r
e
d
i
r
e
c
t
 
u
r
l
'
s
 
t
a
s
k
 
a
s
 
t
h
e
 
c
u
r
r
e
n
t
 
t
a
s
k
.
 
T
o
 
g
e
t
 
a
r
o
u
n
d
 
t
h
i
s
 
w
e
 
n
e
e
d
 
t
o
 
b
a
s
e
6
4
 
e
n
c
o
d
e
 
r
e
d
i
r
e
c
t
 
u
r
l
s
.
 
U
n
f
o
r
u
n
a
t
e
l
y
,
 
s
t
r
a
i
g
h
t
f
o
r
w
a
r
d
 
b
a
s
e
6
4
 
w
i
l
l
 
c
a
u
s
e
 
J
o
o
m
l
a
 
t
o
 
t
h
r
o
w
 
a
n
 
e
r
r
o
r
 
b
e
c
a
u
s
e
 
b
a
s
e
6
4
 
e
n
c
o
d
i
n
g
 
u
s
e
s
 
c
h
a
r
a
c
t
e
r
s
 
t
h
a
t
 
d
o
 
n
o
t
 
w
o
r
k
 
w
e
l
l
 
i
n
 
U
R
L
s
,
 
s
o
 
w
e
'
l
l
 
u
s
e
 
t
h
e
s
e
 
c
u
s
t
o
m
 
f
u
n
c
t
i
o
n
s
 
t
o
 
e
n
c
o
d
e
/
d
e
c
o
d
e
 
u
r
l
s
.

f
u
n
c
t
i
o
n
 
j
r
_
b
a
s
e
6
4
u
r
l
_
e
n
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
 
{

 
 
r
e
t
u
r
n
 
r
t
r
i
m
(
s
t
r
t
r
(
b
a
s
e
6
4
_
e
n
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
,
 
'
+
/
'
,
 
'
-
_
'
)
,
 
'
=
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
r
_
b
a
s
e
6
4
u
r
l
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
 
{

 
 
r
e
t
u
r
n
 
b
a
s
e
6
4
_
d
e
c
o
d
e
(
s
t
r
_
p
a
d
(
s
t
r
t
r
(
$
d
a
t
a
,
 
'
-
_
'
,
 
'
+
/
'
)
,
 
s
t
r
l
e
n
(
$
d
a
t
a
)
 
%
 
4
,
 
'
=
'
,
 
S
T
R
_
P
A
D
_
R
I
G
H
T
)
)
;

}
 


/
*
*

 
*
 
R
e
d
i
r
e
c
t
s
 
t
o
 
$
u
r
l
.

 
*
/

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
R
e
d
i
r
e
c
t
(
$
u
r
l
,
 
$
m
s
g
 
=
 
'
'
,
 
$
c
l
a
s
s
 
=
 
'
a
l
e
r
t
-
i
n
f
o
'
,
 
$
c
o
d
e
 
=
 
3
0
2
)

{

 
 
 
 
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
$
m
s
g
,
 
'
C
o
r
e
'
,
 
'
I
N
F
O
'
)
;

 
 
 
 

	
i
f
 
(
$
m
s
g
 
!
=
 
'
'
 
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
m
e
s
s
a
g
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
m
e
s
s
a
g
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
m
e
s
s
a
g
e
s
-
>
s
e
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
$
m
s
g
,
 
$
c
l
a
s
s
)
;

	
}


	
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
g
e
t
S
i
n
g
l
e
t
o
n
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
8
0
0
0
'
)
;
 
/
/
 
O
p
t
i
o
n
a
l
,
 
p
o
s
t
 
r
u
n
 
i
t
e
m
s
 
t
h
a
t
 
*
m
u
s
t
*
 
b
e
 
r
u
n
 
(
 
w
a
t
c
h
e
r
s
 
)
.


	
	
/
/
w
e
 
h
a
v
e
 
t
o
 
s
a
v
e
 
t
h
e
 
s
e
s
s
i
o
n
 
d
a
t
a
 
e
v
e
r
y
 
t
i
m
e
 
w
e
 
r
e
d
i
r
e
c
t

	
	
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
c
l
o
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
s
e
s
s
i
o
n
(
)
;

	
}

	

	
$
j
r
_
r
e
d
i
r
e
c
t
_
u
r
l
 
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
j
r
_
r
e
d
i
r
e
c
t
_
u
r
l
'
,
 
'
'
)
;

	
i
f
 
(
 
(
s
t
r
i
n
g
)
$
j
r
_
r
e
d
i
r
e
c
t
_
u
r
l
 
!
=
 
'
'
)
 
{

	
	
$
u
r
l
 
=
 
j
r
_
b
a
s
e
6
4
u
r
l
_
d
e
c
o
d
e
(
$
j
r
_
r
e
d
i
r
e
c
t
_
u
r
l
)
;

	
}


 
 
 
 
i
f
 
(
s
t
r
n
c
m
p
(
'
c
l
i
'
,
 
P
H
P
_
S
A
P
I
,
 
3
)
 
!
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
h
e
a
d
e
r
s
_
s
e
n
t
(
)
 
!
=
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
s
t
r
n
c
m
p
(
'
c
g
i
'
,
 
P
H
P
_
S
A
P
I
,
 
3
)
 
=
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
h
e
a
d
e
r
(
s
p
r
i
n
t
f
(
'
S
t
a
t
u
s
:
 
%
0
3
u
'
,
 
$
c
o
d
e
)
,
 
t
r
u
e
,
 
$
c
o
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
h
e
a
d
e
r
(
'
L
o
c
a
t
i
o
n
:
 
'
.
$
u
r
l
,
 
t
r
u
e
,
 
(
p
r
e
g
_
m
a
t
c
h
(
'
~
^
3
0
[
1
2
3
7
]
$
~
'
,
 
$
c
o
d
e
)
 
>
 
0
)
 
?
 
$
c
o
d
e
 
:
 
3
0
2
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
d
o
D
B
C
l
o
s
e
(
)
;

 
 
 
 
 
 
 
 
e
x
i
t
(
)
;

 
 
 
 
}

}


/
*
*

 
*
 
S
a
n
i
t
i
s
e
s
 
t
h
e
 
o
v
e
r
l
i
b
 
o
u
t
p
u
t
.

 
*
/

f
u
n
c
t
i
o
n
 
s
a
n
i
t
i
s
e
O
v
e
r
l
i
b
O
u
t
p
u
t
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
"
'
"
,
 
'
\
\
&
#
3
9
;
'
,
 
$
d
a
t
a
)
;


 
 
 
 
r
e
t
u
r
n
 
$
d
a
t
a
;

}


/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

/
/
-
C
 
O
 
N
 
F
 
I
 
G
	
S
 
E
 
T
 
T
 
I
 
N
 
G
 
S
	
 
-
-
-
-

/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


/
*
*

 
*
 
C
o
n
s
t
r
u
c
t
s
 
t
h
e
 
s
t
a
n
d
a
r
d
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
s
e
t
t
i
n
g
s
 
f
o
r
 
d
i
s
p
l
a
y
 
i
n
 
t
h
e
 
c
o
n
f
i
g
 
p
a
n
e
l
,
 
t
h
e
n
 
t
r
i
g
g
e
r
s
 
e
v
e
n
t
s
 
t
o
 
s
h
o
w
 
s
a
m
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
n
e
l
s
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
o
p
e
r
t
y
C
o
n
f
i
g
u
r
a
t
i
o
n
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

 
 
 
 
$
o
p
t
i
o
n
 
=
 
'
c
o
m
_
j
o
m
r
e
s
'
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
m
r
C
o
n
f
i
g
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
0
5
0
0
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
 
/
/
 
G
e
n
e
r
a
t
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
.
 
O
p
t
i
o
n
a
l


 
 
 
 
/
/
 
t
h
e
 
d
e
f
a
u
l
t
 
v
i
e
w

 
 
 
 
$
l
i
s
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


 
 
 
 
/
/
 
m
a
k
e
 
a
 
s
t
a
n
d
a
r
d
 
y
e
s
/
n
o
 
l
i
s
t

 
 
 
 
$
y
e
s
n
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

 
 
 
 
$
y
e
s
n
o
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
y
e
s
n
o
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
n
e
w
T
a
r
i
f
f
M
o
d
e
l
s
'
 
]
 
!
=
 
'
1
'
 
&
&
 
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
n
e
w
T
a
r
i
f
f
M
o
d
e
l
s
'
 
]
 
!
=
 
'
2
'
)
 
{
 
/
/
 
b
a
c
k
w
a
r
d
 
c
o
m
p
a
t
a
b
l
i
t
y
 
f
o
r
 
p
r
e
-
2
.
5
 
u
s
e
r
s
 
w
h
o
 
h
a
v
e
n
'
t
 
y
e
t
 
v
i
s
i
t
e
d
 
G
e
n
e
r
a
l
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
a
n
d
 
c
l
i
c
k
e
d
 
S
a
v
e

 
 
 
 
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
n
e
w
T
a
r
i
f
f
M
o
d
e
l
s
'
 
]
 
=
 
'
2
'
;

 
 
 
 
}

 
 
 
 
$
t
a
r
i
f
f
M
o
d
e
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
t
a
r
i
f
f
M
o
d
e
l
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
1
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
S
I
N
G
L
E
T
A
R
I
F
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
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
S
I
N
G
L
E
T
A
R
I
F
F
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
t
a
r
i
f
f
M
o
d
e
l
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
2
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
A
V
E
R
A
G
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
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
A
V
E
R
A
G
E
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
;

 
 
 
 
$
t
a
r
i
f
f
M
o
d
e
l
s
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
t
a
r
i
f
f
M
o
d
e
l
s
,
 
'
c
f
g
_
n
e
w
T
a
r
i
f
f
M
o
d
e
l
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
n
e
w
T
a
r
i
f
f
M
o
d
e
l
s
'
 
]
)
;


 
 
 
 
$
w
e
e
k
D
a
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
w
e
e
k
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
1
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
M
O
N
D
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
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
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

 
 
 
 
$
w
e
e
k
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
2
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
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
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
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

 
 
 
 
$
w
e
e
k
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
3
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
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
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
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

 
 
 
 
$
w
e
e
k
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
4
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
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

 
 
 
 
$
w
e
e
k
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
5
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
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

 
 
 
 
$
w
e
e
k
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
6
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
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

 
 
 
 
$
w
e
e
k
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
0
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
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


 
 
 
 
$
w
e
e
k
e
n
d
D
a
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
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
5
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
6
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
4
,
5
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
4
,
5
,
6
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
4
,
5
,
6
,
0
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
5
,
6
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
5
,
6
,
0
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
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

 
 
 
 
$
w
e
e
k
e
n
d
D
a
y
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
6
,
0
'
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
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
,
 
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
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


 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
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

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
%
d
/
%
m
/
%
Y
'
,
 
'
0
1
/
0
2
/
2
0
0
6
 
-
 
1
s
t
 
F
e
b
r
u
a
r
y
 
2
0
0
6
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
%
Y
/
%
m
/
%
d
'
,
 
'
2
0
0
6
/
0
2
/
0
1
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
%
m
/
%
d
/
%
Y
'
,
 
'
0
2
/
0
1
/
2
0
0
6
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
%
d
-
%
m
-
%
Y
'
,
 
'
0
1
-
0
2
-
2
0
0
6
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
%
Y
-
%
m
-
%
d
'
,
 
'
2
0
0
6
-
0
2
-
0
1
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
%
m
-
%
d
-
%
Y
'
,
 
'
0
2
-
0
1
-
2
0
0
6
'
)
;

 
 
 
 
/
/
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
[
]
 
=
	
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
"
%
d
.
%
m
.
%
Y
"
,
 
"
0
1
.
0
2
.
2
0
0
6
"
)
;

 
 
 
 
$
j
s
I
n
p
u
t
F
o
r
m
a
t
D
r
o
p
d
o
w
n
L
i
s
t
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
,
 
'
c
f
g
_
c
a
l
_
i
n
p
u
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
l
_
i
n
p
u
t
'
 
]
)
;


 
 
 
 
/
/
$
s
l
i
d
e
s
h
o
w
D
r
o
p
d
o
w
n
L
i
s
t
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
s
l
i
d
e
s
h
o
w
N
a
m
e
s
,
 
'
c
f
g
_
s
l
i
d
e
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
l
i
d
e
s
h
o
w
'
]
)
;

 
 
 
 
$
w
e
e
k
d
a
y
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
w
e
e
k
D
a
y
s
,
 
'
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
]
)
;

 
 
 
 
$
w
e
e
k
e
n
d
d
a
y
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
w
e
e
k
e
n
d
D
a
y
s
,
 
'
c
f
g
_
w
e
e
k
e
n
d
d
a
y
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
w
e
e
k
e
n
d
d
a
y
s
'
 
]
)
;


 
 
 
 
$
d
e
p
A
m
o
u
n
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

 
 
 
 
$
d
e
p
A
m
o
u
n
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
C
O
M
_
C
H
A
R
G
I
N
G
_
D
E
P
O
S
I
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
C
H
A
R
G
I
N
G
_
D
E
P
O
S
I
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
d
e
p
A
m
o
u
n
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
C
O
M
_
C
H
A
R
G
I
N
G
_
F
U
L
L
A
M
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
C
H
A
R
G
I
N
G
_
F
U
L
L
A
M
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
p
a
y
m
e
n
t
A
m
o
u
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
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
d
e
p
A
m
o
u
n
t
s
,
 
'
c
f
g
_
d
e
p
A
m
o
u
n
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
d
e
p
A
m
o
u
n
t
'
 
]
)
;


 
 
 
 
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
t
a
r
i
f
f
m
o
d
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
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
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
 
1
;

 
 
 
 
}

 
 
 
 
$
t
a
r
i
f
f
M
o
d
e
 
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
a
r
i
f
f
M
o
d
e
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
T
A
R
I
F
F
M
O
D
E
_
N
O
R
M
A
L
'
,
 
'
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
T
A
R
I
F
F
M
O
D
E
_
N
O
R
M
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
 
'
0
6
0
0
2
'
]
[
'
e
d
i
t
_
t
a
r
i
f
f
_
m
i
c
r
o
m
a
n
a
g
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
M
o
d
e
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
2
'
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
T
A
R
I
F
F
M
O
D
E
_
T
A
R
I
F
F
T
Y
P
E
S
'
,
 
'
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
T
A
R
I
F
F
M
O
D
E
_
T
A
R
I
F
F
T
Y
P
E
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
;

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
M
o
d
e
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
T
A
R
I
F
F
M
O
D
E
_
A
D
V
A
N
C
E
D
'
,
 
'
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
T
A
R
I
F
F
M
O
D
E
_
A
D
V
A
N
C
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
)
;

 
 
 
 
}

 
 
 
 
$
t
a
r
i
f
f
M
o
d
e
D
D
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
t
a
r
i
f
f
M
o
d
e
,
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
t
a
r
i
f
f
m
o
d
e
'
 
]
)
;


 
 
 
 
$
i
c
o
n
s
i
z
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
i
c
o
n
s
i
z
e
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
s
m
a
l
l
'
,
 
'
s
m
a
l
l
'
)
;

 
 
 
 
$
i
c
o
n
s
i
z
e
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
l
a
r
g
e
'
,
 
'
l
a
r
g
e
'
)
;

 
 
 
 
$
e
d
i
t
I
c
o
n
S
i
z
e
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
i
c
o
n
s
i
z
e
s
,
 
'
c
f
g
_
e
d
i
t
i
c
o
n
s
i
z
e
'
,
 
'
s
i
z
e
=
"
1
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
e
d
i
t
i
c
o
n
s
i
z
e
'
 
]
)
;


 
 
 
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
=
 
'
1
'
;

 
 
 
 
}

 
 
 
 
$
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
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
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
C
L
A
S
S
I
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
C
L
A
S
S
I
C
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
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
2
'
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
R
O
O
M
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
R
O
O
M
T
Y
P
E
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
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
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
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
,
 
'
c
f
g
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
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
,
 
'
s
i
z
e
=
"
1
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
)
;


 
 
 
 
$
f
i
x
e
d
A
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
s
R
e
c
u
r
r
i
n
g
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
0
1
,
 
2
0
8
,
 
1
,
 
'
c
f
g
_
f
i
x
e
d
A
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
s
R
e
c
u
r
r
i
n
g
'
,
 
'
s
i
z
e
=
"
1
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
'
,
 
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
f
i
x
e
d
A
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
s
R
e
c
u
r
r
i
n
g
'
 
]
,
 
'
%
0
2
d
'
)
;


 
 
 
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
 
'
D
'
;

 
 
 
 
}

 
 
 
 
$
p
r
i
c
i
n
g
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
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
p
r
i
c
i
n
g
O
u
t
p
u
t
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
D
'
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
_
W
H
O
L
E
D
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
_
W
H
O
L
E
D
A
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

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
p
r
i
c
i
n
g
O
u
t
p
u
t
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
D
'
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
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

 
 
 
 
}

 
 
 
 
$
p
r
i
c
i
n
g
O
u
t
p
u
t
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
W
'
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
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

 
 
 
 
$
p
r
i
c
i
n
g
O
u
t
p
u
t
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
M
'
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
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

 
 
 
 
$
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
p
r
i
c
i
n
g
O
u
t
p
u
t
,
 
'
c
f
g
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
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
;


 
 
 
 
/
/
$
l
i
s
t
s
[
'
t
a
r
i
f
f
m
o
d
e
l
'
]
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
 
$
t
a
r
i
f
f
m
o
d
e
l
s
,
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
l
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
t
a
r
i
f
f
m
o
d
e
l
'
]
 
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
R
o
o
m
I
m
a
g
e
I
n
B
o
o
k
i
n
g
F
o
r
m
O
v
e
r
l
i
b
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
R
o
o
m
I
m
a
g
e
I
n
B
o
o
k
i
n
g
F
o
r
m
O
v
e
r
l
i
b
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
R
o
o
m
I
m
a
g
e
I
n
B
o
o
k
i
n
g
F
o
r
m
O
v
e
r
l
i
b
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
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
i
m
e
n
t
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
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
i
m
e
n
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
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
i
m
e
n
t
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
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
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
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
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
d
e
p
o
s
i
t
I
s
P
e
r
c
e
n
t
a
g
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
d
e
p
o
s
i
t
I
s
P
e
r
c
e
n
t
a
g
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
d
e
p
o
s
i
t
I
s
P
e
r
c
e
n
t
a
g
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
e
r
r
o
r
C
h
e
c
k
i
n
g
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
e
r
r
o
r
C
h
e
c
k
i
n
g
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
e
r
r
o
r
C
h
e
c
k
i
n
g
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
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
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
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
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
f
i
x
e
d
A
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
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
f
i
x
e
d
A
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
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
f
i
x
e
d
A
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
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
E
x
t
r
a
s
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
E
x
t
r
a
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
E
x
t
r
a
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
r
o
o
m
T
a
x
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
r
o
o
m
T
a
x
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
r
o
o
m
T
a
x
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
e
u
r
o
T
a
x
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
e
u
r
o
T
a
x
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
e
u
r
o
T
a
x
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
e
d
i
t
i
n
g
O
n
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
e
d
i
t
i
n
g
O
n
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
e
d
i
t
i
n
g
O
n
'
 
]
)
;

 
 
 
 
/
/
$
l
i
s
t
s
[
'
p
o
p
u
p
s
A
l
l
o
w
e
d
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
 
$
y
e
s
n
o
,
 
'
c
f
g
_
p
o
p
u
p
s
A
l
l
o
w
e
d
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
o
p
u
p
s
A
l
l
o
w
e
d
'
]
 
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
S
l
i
d
e
s
h
o
w
L
i
n
k
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
S
l
i
d
e
s
h
o
w
L
i
n
k
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
S
l
i
d
e
s
h
o
w
L
i
n
k
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
S
l
i
d
e
s
h
o
w
I
n
l
i
n
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
S
l
i
d
e
s
h
o
w
I
n
l
i
n
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
S
l
i
d
e
s
h
o
w
I
n
l
i
n
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
T
a
r
i
f
f
s
I
n
l
i
n
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
T
a
r
i
f
f
s
I
n
l
i
n
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
T
a
r
i
f
f
s
I
n
l
i
n
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
T
a
r
i
f
f
s
L
i
n
k
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
T
a
r
i
f
f
s
L
i
n
k
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
T
a
r
i
f
f
s
L
i
n
k
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
O
n
l
i
n
e
p
a
y
m
e
n
t
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
u
s
e
O
n
l
i
n
e
p
a
y
m
e
n
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
u
s
e
O
n
l
i
n
e
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
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
c
a
l
s
t
a
r
t
f
r
o
m
b
e
g
i
n
n
i
n
g
o
f
y
e
a
r
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
c
a
l
s
t
a
r
t
f
r
o
m
b
e
g
i
n
n
i
n
g
o
f
y
e
a
r
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
l
s
t
a
r
t
f
r
o
m
b
e
g
i
n
n
i
n
g
o
f
y
e
a
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
G
o
o
g
l
e
C
u
r
r
e
n
c
y
L
i
n
k
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
G
o
o
g
l
e
C
u
r
r
e
n
c
y
L
i
n
k
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
G
o
o
g
l
e
C
u
r
r
e
n
c
y
L
i
n
k
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
D
e
t
a
i
l
s
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
D
e
t
a
i
l
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
D
e
t
a
i
l
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
R
o
o
m
s
L
i
s
t
i
n
g
L
i
n
k
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
R
o
o
m
s
L
i
s
t
i
n
g
L
i
n
k
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
R
o
o
m
s
L
i
s
t
i
n
g
L
i
n
k
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
O
n
l
y
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
O
n
l
y
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
O
n
l
y
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
r
e
g
i
s
t
e
r
e
d
U
s
e
r
s
O
n
l
y
C
a
n
B
o
o
k
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
r
e
g
i
s
t
e
r
e
d
U
s
e
r
s
O
n
l
y
C
a
n
B
o
o
k
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
r
e
g
i
s
t
e
r
e
d
U
s
e
r
s
O
n
l
y
C
a
n
B
o
o
k
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
r
o
o
m
s
l
i
s
t
i
n
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
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
r
o
o
m
s
l
i
s
t
i
n
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
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
r
o
o
m
s
l
i
s
t
i
n
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
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
v
e
r
b
o
s
e
t
a
r
i
f
f
i
n
f
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
v
e
r
b
o
s
e
t
a
r
i
f
f
i
n
f
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
v
e
r
b
o
s
e
t
a
r
i
f
f
i
n
f
o
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
t
i
t
l
e
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
t
i
t
l
e
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
t
i
t
l
e
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
d
e
s
c
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
d
e
s
c
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
d
e
s
c
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
r
a
t
e
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
r
a
t
e
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
r
a
t
e
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
s
t
a
r
t
s
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
s
t
a
r
t
s
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
s
t
a
r
t
s
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
e
n
d
s
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
e
n
d
s
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
e
n
d
s
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
d
a
y
s
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
d
a
y
s
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
d
a
y
s
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
d
a
y
s
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
d
a
y
s
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
d
a
y
s
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
p
e
e
p
s
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
p
e
e
p
s
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
p
e
e
p
s
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
p
e
e
p
s
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
p
e
e
p
s
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
p
e
e
p
s
_
s
h
o
w
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
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
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
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
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
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
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
r
o
o
m
_
n
a
m
e
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
r
o
o
m
_
n
a
m
e
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
r
o
o
m
_
n
a
m
e
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
r
o
o
m
_
m
a
x
p
e
o
p
l
e
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
r
o
o
m
_
m
a
x
p
e
o
p
l
e
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
_
r
o
o
m
_
m
a
x
p
e
o
p
l
e
_
s
h
o
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
o
v
e
r
l
i
b
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
_
s
h
o
w
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
a
m
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
a
m
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
a
m
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
t
a
r
i
f
f
t
i
t
l
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
t
a
r
i
f
f
t
i
t
l
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
t
a
r
i
f
f
t
i
t
l
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
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
C
h
a
r
g
e
I
s
P
e
r
c
e
n
t
a
g
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
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
C
h
a
r
g
e
I
s
P
e
r
c
e
n
t
a
g
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
C
h
a
r
g
e
I
s
P
e
r
c
e
n
t
a
g
e
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
n
a
m
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
n
a
m
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
n
a
m
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
u
r
n
a
m
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
u
r
n
a
m
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
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
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
h
o
u
s
e
n
o
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
h
o
u
s
e
n
o
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
h
o
u
s
e
n
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
t
r
e
e
t
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
t
r
e
e
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
t
r
e
e
t
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
o
w
n
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
o
w
n
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
o
w
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
p
o
s
t
c
o
d
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
p
o
s
t
c
o
d
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
p
o
s
t
c
o
d
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
r
e
g
i
o
n
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
r
e
g
i
o
n
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
r
e
g
i
o
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
c
o
u
n
t
r
y
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
c
o
u
n
t
r
y
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
c
o
u
n
t
r
y
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
e
l
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
e
l
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
e
l
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
m
o
b
i
l
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
m
o
b
i
l
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
m
o
b
i
l
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
e
m
a
i
l
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
e
m
a
i
l
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
e
m
a
i
l
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
d
i
s
a
b
l
e
d
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
d
i
s
a
b
l
e
d
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
d
i
s
a
b
l
e
d
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
s
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
u
s
e
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
u
s
e
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
s
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
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
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
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
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
d
e
p
o
s
i
t
I
s
O
n
e
N
i
g
h
t
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
d
e
p
o
s
i
t
I
s
O
n
e
N
i
g
h
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
d
e
p
o
s
i
t
I
s
O
n
e
N
i
g
h
t
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
)
;

	
$
l
i
s
t
s
[
 
'
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
'
 
]
)
;


 
 
 
 
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
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
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
o
r
m
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
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
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
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
o
r
m
'
 
]
 
=
 
'
1
'
;

 
 
 
 
}


 
 
 
 
$
l
i
s
t
s
[
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
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
o
r
m
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
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
o
r
m
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
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
o
r
m
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
i
e
s
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
g
_
s
h
o
w
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
i
e
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
s
h
o
w
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
i
e
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
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
_
s
y
m
b
o
l
_
s
w
a
p
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
c
f
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
_
s
y
m
b
o
l
_
s
w
a
p
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
 
]
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
m
r
C
o
n
f
i
g
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
l
i
s
t
s
'
 
]
 
=
 
$
l
i
s
t
s
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
w
e
e
k
d
a
y
D
r
o
p
d
o
w
n
'
 
]
 
=
 
$
w
e
e
k
d
a
y
D
r
o
p
d
o
w
n
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
j
s
I
n
p
u
t
F
o
r
m
a
t
D
r
o
p
d
o
w
n
L
i
s
t
'
 
]
 
=
 
$
j
s
I
n
p
u
t
F
o
r
m
a
t
D
r
o
p
d
o
w
n
L
i
s
t
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
w
e
e
k
e
n
d
d
a
y
D
r
o
p
d
o
w
n
'
 
]
 
=
 
$
w
e
e
k
e
n
d
d
a
y
D
r
o
p
d
o
w
n
;

 
 
 
 
/
/
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
s
D
r
o
p
d
o
w
n
L
i
s
t
'
]
=
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
s
D
r
o
p
d
o
w
n
L
i
s
t
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
a
y
m
e
n
t
A
m
o
u
n
t
s
'
 
]
 
=
 
$
p
a
y
m
e
n
t
A
m
o
u
n
t
s
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
e
d
i
t
I
c
o
n
S
i
z
e
'
 
]
 
=
 
$
e
d
i
t
I
c
o
n
S
i
z
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
[
 
'
f
i
x
e
d
A
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
s
R
e
c
u
r
r
i
n
g
'
 
]
 
=
 
$
f
i
x
e
d
A
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
s
R
e
c
u
r
r
i
n
g
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
t
a
r
i
f
f
M
o
d
e
l
s
D
r
o
p
d
o
w
n
'
 
]
 
=
 
$
t
a
r
i
f
f
M
o
d
e
l
s
D
r
o
p
d
o
w
n
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
j
o
m
r
e
s
C
o
n
f
i
g
_
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
t
a
r
i
f
f
M
o
d
e
D
D
'
 
]
 
=
 
$
t
a
r
i
f
f
M
o
d
e
D
D
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
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
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
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
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
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
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
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
;


 
 
 
 
o
b
_
s
t
a
r
t
(
)
;


 
 
 
 
/
/
 
T
h
e
 
f
o
l
l
o
w
i
n
g
 
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
 
i
s
 
f
o
r
 
s
e
l
e
c
t
i
n
g
 
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
s

 
 
 
 
?
>


	
	
<
f
o
r
m
 
a
c
t
i
o
n
=
"
<
?
p
h
p
 
e
c
h
o
 
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
N
O
S
E
F
 
?
>
"
 
m
e
t
h
o
d
=
"
p
o
s
t
"
 
n
a
m
e
=
"
a
d
m
i
n
F
o
r
m
"
>

	
	
	
<
h
2
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
<
?
p
h
p
 
e
c
h
o
 
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
G
E
N
E
R
A
L
C
O
N
F
I
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
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
'
)
;
 
?
>
<
/
h
2
>

	
	
	
<
?
p
h
p


 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
'
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
s
a
v
e
'
,
 
'
'
,
 
'
'
,
 
t
r
u
e
,
 
'
s
a
v
e
_
b
u
s
i
n
e
s
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


 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
;


 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
c
l
a
s
s
=
"
w
e
l
l
 
c
l
e
a
r
f
i
x
"
>
<
d
i
v
 
c
l
a
s
s
=
"
p
u
l
l
-
l
e
f
t
"
>
'
.
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
.
'
<
/
d
i
v
>
<
/
d
i
v
>
'
;


 
 
 
 
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
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
p
a
n
e
l
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
s
_
v
e
r
s
i
o
n
 
=
 
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
;

 
 
 
 
 
 
 
 
i
f
 
(
$
b
s
_
v
e
r
s
i
o
n
 
=
=
 
'
2
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
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
p
a
n
e
l
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
b
s
_
v
e
r
s
i
o
n
 
=
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
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
p
a
n
e
l
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
3
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
 
]
 
=
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
;


 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
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
0
5
0
1
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
 
/
/
 
G
e
n
e
r
a
t
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
t
a
b
s


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
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
 
?
>

	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
n
o
_
h
t
m
l
"
 
v
a
l
u
e
=
"
1
"
>

	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
t
a
s
k
"
 
v
a
l
u
e
=
"
s
a
v
e
_
b
u
s
i
n
e
s
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
"
/
>

	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
o
p
t
i
o
n
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
$
o
p
t
i
o
n
;
 
?
>
"
/
>

	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
f
g
_
v
e
r
s
i
o
n
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
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
v
e
r
s
i
o
n
'
 
]
;
 
?
>
"
/
>

	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
f
g
_
j
o
m
r
e
s
d
o
t
n
e
t
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
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
j
o
m
r
e
s
d
o
t
n
e
t
'
 
]
;
 
?
>
"
/
>

	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
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
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
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
 
?
>
"
/
>

	
	
	
<
?
p
h
p

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
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
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
o
l
d
s
e
t
t
i
n
g
_
c
f
g
_
'
.
$
k
.
'
"
 
v
a
l
u
e
=
"
'
.
$
v
.
'
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
?
>

	
	
<
/
f
o
r
m
>


	
<
?
p
h
p

 
 
 
 
o
b
_
e
n
d
_
f
l
u
s
h
(
)
;

}


/
*
*

 
*
 
T
a
k
e
s
 
s
e
t
t
i
n
g
s
 
f
r
o
m
 
t
h
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
a
n
d
 
s
a
v
e
s
 
(
m
o
s
t
 
o
f
 
t
h
e
m
)
 
t
o
 
t
h
e
 
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
 
t
a
b
l
e
.

 
*
/

f
u
n
c
t
i
o
n
 
s
a
v
e
P
r
o
p
e
r
t
y
C
o
n
f
i
g
u
r
a
t
i
o
n
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
0
5
0
2
'
,
 
a
r
r
a
y
(
)
)
;
 
/
/
 
T
h
i
s
 
t
r
i
g
g
e
r
 
a
l
l
o
w
s
 
p
l
u
g
i
n
s
 
t
o
 
c
h
e
c
k
 
s
a
v
e
s
,
 
f
o
r
 
e
x
a
m
p
l
e
 
t
o
 
p
r
e
v
e
n
t
 
f
u
t
u
r
e
 
c
h
a
n
g
e
s
 
t
o
 
a
 
s
e
t
t
i
n
g
 
o
n
c
e
 
i
t
'
s
 
b
e
e
n
 
m
a
d
e
.


 
 
 
 
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


 
 
 
 
$
t
a
r
i
f
f
m
o
d
e
C
h
a
n
g
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
_
P
O
S
T
[
 
'
o
l
d
s
e
t
t
i
n
g
_
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
1
'
 
&
&
 
$
_
P
O
S
T
[
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{
 
/
/
 
A
d
v
a
n
c
e
d
 
 
-
>
 
m
i
c
r
o
m
a
n
a
g
e

 
 
 
 
 
 
 
 
e
c
h
o
 
'
D
e
l
e
t
i
n
g
 
o
l
d
 
t
a
r
i
f
f
s
'
;

 
 
 
 
 
 
 
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
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

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
m
o
d
e
C
h
a
n
g
e
 
=
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
_
P
O
S
T
[
 
'
o
l
d
s
e
t
t
i
n
g
_
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
0
'
 
&
&
 
$
_
P
O
S
T
[
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{
 
/
/
 
N
o
r
m
a
l
 
 
-
>
 
m
i
c
r
o
m
a
n
a
g
e

 
 
 
 
 
 
 
 
e
c
h
o
 
'
D
e
l
e
t
i
n
g
 
o
l
d
 
t
a
r
i
f
f
s
'
;

 
 
 
 
 
 
 
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
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

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
m
o
d
e
C
h
a
n
g
e
 
=
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
_
P
O
S
T
[
 
'
o
l
d
s
e
t
t
i
n
g
_
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
 
&
&
 
(
$
_
P
O
S
T
[
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
0
'
 
|
|
 
$
_
P
O
S
T
[
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
1
'
)
)
 
{
 
/
/
 
M
i
c
r
o
m
a
n
a
g
e
 
 
-
>
 
n
o
r
m
a
l
/
a
d
v
a
n
c
e
d

 
 
 
 
 
 
 
 
e
c
h
o
 
'
D
e
l
e
t
i
n
g
 
o
l
d
 
t
a
r
i
f
f
s
'
;

 
 
 
 
 
 
 
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
E
n
h
a
n
c
e
T
a
r
i
f
f
s
X
r
e
f
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

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
m
o
d
e
C
h
a
n
g
e
 
=
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
i
f
 
(
(
$
_
P
O
S
T
[
 
'
o
l
d
s
e
t
t
i
n
g
_
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
1
'
 
|
|
 
$
_
P
O
S
T
[
 
'
o
l
d
s
e
t
t
i
n
g
_
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
&
&
 
$
_
P
O
S
T
[
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
0
'
)
 
{
 
/
/
 
A
d
v
a
n
c
e
d
/
M
i
c
r
o
m
a
n
a
g
e
 
 
-
>
 
n
o
r
m
a
l

 
 
 
 
 
 
 
 
e
c
h
o
 
'
D
e
l
e
t
i
n
g
 
o
l
d
 
t
a
r
i
f
f
s
'
;

 
 
 
 
 
 
 
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
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

 
 
 
 
 
 
 
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
E
n
h
a
n
c
e
T
a
r
i
f
f
s
X
r
e
f
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

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
m
o
d
e
C
h
a
n
g
e
 
=
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
_
P
O
S
T
[
 
'
o
l
d
s
e
t
t
i
n
g
_
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
0
'
 
&
&
 
$
_
P
O
S
T
[
 
'
c
f
g
_
t
a
r
i
f
f
m
o
d
e
'
 
]
 
!
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
m
o
d
e
C
h
a
n
g
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
 
I
f
 
t
h
e
 
m
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
p
e
r
c
e
n
t
a
g
e
 
s
e
t
t
i
n
g
 
i
s
 
s
e
t
,
 
t
h
e
n
 
t
h
e
s
e
 
o
p
t
i
o
n
s
 
c
a
n
n
o
t
 
b
e
 
a
l
t
e
r
e
d
,
 
i
n
s
t
e
a
d
 
w
e
 
w
i
l
l
 
f
o
r
c
e
 
t
h
e
m
 
s
o
 
t
h
a
t
 
D
e
p
o
s
i
t
s
 
a
r
e
 
a
l
w
a
y
s
 
c
h
a
r
g
e
d
,
 
t
h
e
 
"
d
e
p
o
s
i
t
 
i
s
 
o
n
e
 
n
i
g
h
t
'
s
 
v
a
l
u
e
"
 
s
e
t
t
i
n
g
 
c
a
n
n
o
t
 
b
e
 
u
s
e
d
,
 
a
n
d
 
o
f
 
c
o
u
r
s
e
 
w
e
'
l
l
 
f
o
r
c
e
 
t
h
e
 
D
e
p
o
s
i
t
 
i
s
 
P
e
r
c
e
n
t
a
g
e
 
s
e
t
t
i
n
g
 
t
o
 
t
r
u
e

 
 
 
 
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
m
i
n
i
m
u
m
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
e
r
c
e
n
t
a
g
e
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
m
i
n
i
m
u
m
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
e
r
c
e
n
t
a
g
e
'
 
]
 
=
 
0
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
m
i
n
i
m
u
m
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
e
r
c
e
n
t
a
g
e
'
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
_
P
O
S
T
[
 
'
c
f
g
_
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
 
=
 
1
;

 
 
 
 
 
 
 
 
$
_
P
O
S
T
[
 
'
c
f
g
_
d
e
p
o
s
i
t
I
s
O
n
e
N
i
g
h
t
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
$
_
P
O
S
T
[
 
'
c
f
g
_
d
e
p
o
s
i
t
I
s
P
e
r
c
e
n
t
a
g
e
'
 
]
 
=
 
1
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
_
P
O
S
T
[
 
'
c
f
g
_
d
e
p
o
s
i
t
V
a
l
u
e
'
 
]
 
<
 
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
m
i
n
i
m
u
m
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
e
r
c
e
n
t
a
g
e
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
_
P
O
S
T
[
 
'
c
f
g
_
d
e
p
o
s
i
t
V
a
l
u
e
'
 
]
 
=
 
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
m
i
n
i
m
u
m
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
e
r
c
e
n
t
a
g
e
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
u
p
d
a
t
e
_
c
o
u
n
t
 
=
 
0
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
_
P
O
S
T
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
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
k
,
 
'
c
f
g
_
'
)
 
=
=
=
 
0
 
&
&
 
$
k
 
!
=
 
'
c
f
g
_
j
o
m
r
e
s
_
l
i
c
e
n
s
e
k
e
y
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
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
P
O
S
T
,
 
$
k
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
r
t
y
 
=
 
(
s
t
r
i
n
g
)
 
$
k
;

 
 
 
 
 
 
 
 
 
 
 
 
$
k
 
=
 
a
d
d
s
l
a
s
h
e
s
(
$
d
i
r
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
g
e
t
_
m
a
g
i
c
_
q
u
o
t
e
s
_
g
p
c
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
v
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
u
b
s
t
r
(
$
k
,
 
4
)
 
=
=
 
'
e
n
c
K
e
y
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
a
v
e
K
e
y
(
$
v
)
;
 
/
/
 
C
o
m
m
e
n
t
e
d
 
o
u
t
,
 
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
 
i
s
 
n
o
 
l
o
n
g
e
r
 
a
v
a
i
l
a
b
l
e
,
 
h
o
w
e
v
e
r
 
k
e
e
p
i
n
g
 
t
h
e
 
I
F
 
s
t
a
t
e
m
e
n
t
 
h
e
r
e
 
a
l
l
o
w
s
 
t
o
 
b
e
 
a
b
s
o
l
u
t
e
l
y
 
s
u
r
e
 
t
h
a
t
 
i
f
 
e
n
c
K
e
y
 
i
s
 
s
e
t
 
(
b
y
 
a
 
v
e
r
y
 
n
a
u
g
h
t
y
 
p
e
r
s
o
n
)
 
t
h
e
n
 
n
o
t
h
i
n
g
 
i
s
 
d
o
n
e
.

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
l
d
S
e
t
t
i
n
g
K
e
y
 
=
 
'
o
l
d
s
e
t
t
i
n
g
_
'
.
$
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
l
d
S
e
t
t
i
n
g
V
a
l
 
=
 
$
_
P
O
S
T
[
 
$
o
l
d
S
e
t
t
i
n
g
K
e
y
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
o
l
d
S
e
t
t
i
n
g
V
a
l
 
!
=
 
$
v
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
 
a
n
d
 
a
k
e
y
 
=
 
'
"
.
s
u
b
s
t
r
(
$
k
,
 
4
)
.
"
'
"
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
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
,
a
k
e
y
,
v
a
l
u
e
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
,
'
"
.
s
u
b
s
t
r
(
$
k
,
 
4
)
.
"
'
,
'
"
.
$
v
.
"
'
)
"
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
s
e
t
t
i
n
g
s
 
S
E
T
 
`
v
a
l
u
e
`
=
'
"
.
$
v
.
"
'
 
W
H
E
R
E
 
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
 
a
n
d
 
a
k
e
y
 
=
 
'
"
.
s
u
b
s
t
r
(
$
k
,
 
4
)
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
p
d
a
t
e
_
c
o
u
n
t
 
+
+
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
i
f
 
(
 
$
u
p
d
a
t
e
_
c
o
u
n
t
 
>
 
0
 
)
 
{

 
 
 
 
 
 
 
 
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
s
e
t
t
i
n
g
s
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
 
a
r
e
 
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


 
 
 
 
i
f
 
(
t
r
i
m
(
$
_
P
O
S
T
[
'
c
f
g
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
v
a
t
_
n
u
m
b
e
r
'
]
)
 
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
v
a
t
_
n
u
m
b
e
r
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
'
)
;

 
 
 
 
 
 
 
 
$
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
 
v
a
t
_
n
u
m
b
e
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
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
v
i
e
s
_
c
h
e
c
k
(
f
i
l
t
e
r
_
v
a
r
(
$
_
P
O
S
T
[
'
c
f
g
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
v
a
t
_
n
u
m
b
e
r
'
]
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
)
;

 
 
 
 
 
 
 
 
$
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
s
a
v
e
_
s
u
b
j
e
c
t
(
$
t
y
p
e
 
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
'
,
 
a
r
r
a
y
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
 
=
>
 
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


/
*
*

 
*
 
R
e
m
o
v
e
 
o
l
d
 
t
a
b
l
e
s

 
*
/

f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
E
n
h
a
n
c
e
T
a
r
i
f
f
s
X
r
e
f
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
s
 
W
H
E
R
E
 
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


/
*
*

 
*
 
R
e
m
o
v
e
 
o
l
d
 
t
a
b
l
e
s

 
*
/

f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
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

{

 
 
 
 
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
a
t
e
s
 
W
H
E
R
E
 
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


/
*
*

 
*
 
R
e
m
o
v
e
 
o
l
d
 
t
a
b
l
e
s

 
*
/

f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
A
l
l
P
r
o
p
e
r
t
y
R
o
o
m
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

{

 
 
 
 
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
s
 
W
H
E
R
E
 
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


/
*
*

 
*
 
U
s
e
r
 
h
a
s
 
b
e
e
n
 
l
o
g
g
e
d
 
o
u
t
 
(
o
r
 
h
a
s
 
a
t
t
e
m
p
t
e
d
 
t
o
 
a
c
c
e
s
s
 
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
 
i
l
l
e
g
a
l
l
y
)
.

 
*
/

f
u
n
c
t
i
o
n
 
u
s
e
r
H
a
s
B
e
e
n
L
o
g
g
e
d
O
u
t
(
)

{

 
 
 
 
e
c
h
o
 
'
<
c
e
n
t
e
r
>
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
R
e
s
t
r
i
c
t
e
d
.
p
n
g
"
 
a
l
i
g
n
=
"
m
i
d
d
l
e
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

 
 
 
 
e
c
h
o
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
S
e
c
u
r
e
d
.
p
n
g
"
 
a
l
i
g
n
=
"
m
i
d
d
l
e
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

 
 
 
 
e
c
h
o
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
R
e
s
t
r
i
c
t
e
d
.
p
n
g
"
 
a
l
i
g
n
=
"
m
i
d
d
l
e
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
<
/
c
e
n
t
e
r
>
<
b
r
 
/
>
'
;

 
 
 
 
e
c
h
o
 
'
<
h
2
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
J
R
_
N
O
T
L
O
G
G
E
D
I
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
J
R
_
N
O
T
L
O
G
G
E
D
I
N
'
)
.
'
<
/
h
2
>
'
;

 
 
 
 
e
c
h
o
 
'
<
c
e
n
t
e
r
>
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
R
e
s
t
r
i
c
t
e
d
.
p
n
g
"
 
a
l
i
g
n
=
"
m
i
d
d
l
e
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

 
 
 
 
e
c
h
o
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
S
e
c
u
r
e
d
.
p
n
g
"
 
a
l
i
g
n
=
"
m
i
d
d
l
e
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

 
 
 
 
e
c
h
o
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
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
R
e
s
t
r
i
c
t
e
d
.
p
n
g
"
 
a
l
i
g
n
=
"
m
i
d
d
l
e
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
<
/
c
e
n
t
e
r
>
<
b
r
 
/
>
'
;

}


/
*
*

 
*
 
T
r
i
g
g
e
r
s
 
t
h
e
 
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
 
m
i
n
i
-
c
o
m
p
 
0
3
0
2
0
.

 
*
/

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
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
(
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
'
'
,
 
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
,
 
$
c
o
n
f
i
r
m
a
t
i
o
n
P
a
g
e
R
e
q
u
i
r
e
d
 
=
 
t
r
u
e
,
 
$
c
u
s
t
o
m
T
e
x
t
F
o
r
C
o
n
f
i
r
m
a
t
i
o
n
F
o
r
m
 
=
 
'
'
,
 
$
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
 
=
 
f
a
l
s
e
)

{

 
 
 
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
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


 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
:
 
A
t
t
e
m
p
t
i
n
g
 
t
o
 
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
 
j
s
i
d
:
 
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
)
;

 
 
 
 
i
f
 
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
c
a
r
t
_
p
a
y
m
e
n
t
'
)
)
 
{
 
/
/
 
I
'
m
 
p
r
o
b
a
b
l
y
 
b
e
i
n
g
 
l
a
z
y
,
 
c
r
e
a
t
i
n
g
 
t
h
i
s
 
c
o
n
d
i
t
i
o
n
 
l
i
k
e
 
t
h
i
s
,
 
b
u
t
 
I
'
d
 
r
a
t
h
e
r
 
k
e
e
p
 
t
h
i
n
g
s
 
c
l
e
a
r
 
i
n
 
m
y
 
o
w
n
 
m
i
n
d
 
a
t
m
,
 
i
t
 
c
a
n
 
b
e
 
t
i
d
i
e
d
 
u
p
 
l
a
t
e
r

 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
_
f
a
i
l
e
d
 
=
 
f
a
l
s
e
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
c
a
r
t
_
d
a
t
a
 
a
s
 
$
k
e
y
 
=
>
 
$
c
a
r
t
_
d
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
$
c
a
r
t
_
d
a
t
a
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
t
m
p
g
u
e
s
t
 
=
 
$
c
a
r
t
_
d
a
t
a
[
 
'
t
m
p
g
u
e
s
t
'
 
]
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
'
j
o
m
r
e
s
s
e
s
s
i
o
n
'
 
=
>
 
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
,
 
'
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
'
 
=
>
 
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
,
 
'
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
'
 
=
>
 
$
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
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
3
0
2
0
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
 
/
/
 
T
r
i
g
g
e
r
 
t
h
e
 
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
 
m
i
n
i
-
c
o
m
p

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
:
 
'
.
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
 
'
0
3
0
2
0
'
 
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
 
'
0
3
0
2
0
'
 
]
[
 
'
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
'
 
]
[
 
'
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
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
_
f
a
i
l
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
e
t
T
e
m
p
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
-
>
r
e
s
e
t
T
e
m
p
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
:
 
I
n
s
e
r
t
 
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
 
'
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
r
m
a
t
i
o
n
P
a
g
e
R
e
q
u
i
r
e
d
 
&
&
 
!
$
i
n
s
e
r
t
_
f
a
i
l
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
:
O
u
t
p
u
t
t
i
n
g
 
c
o
n
f
i
r
m
a
t
i
o
n
 
p
a
g
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
 
(
i
n
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
 
=
>
 
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
'
c
u
s
t
o
m
T
e
x
t
'
 
=
>
 
$
c
u
s
t
o
m
T
e
x
t
F
o
r
C
o
n
f
i
r
m
a
t
i
o
n
F
o
r
m
)
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
3
0
3
0
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
 
/
/
 
B
o
o
k
i
n
g
 
c
o
m
p
l
e
t
e
d
 
m
e
s
s
a
g
e

 
 
 
 
 
 
 
 
 
 
 
 
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
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
B
O
O
K
I
N
G
S
A
V
E
D
M
E
S
S
A
G
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
B
O
O
K
I
N
G
S
A
V
E
D
M
E
S
S
A
G
E
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
e
d
i
t
_
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
.
'
&
t
a
s
k
=
e
d
i
t
_
d
e
p
o
s
i
t
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
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
 
'
0
3
0
2
0
'
 
]
[
 
'
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
'
 
]
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

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
<
h
2
>
R
e
s
e
t
t
i
n
g
 
t
e
m
p
 
b
o
o
k
i
n
g
 
d
a
t
a
<
/
h
2
>
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
r
e
s
e
t
C
a
r
t
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
 
'
0
3
0
2
0
'
 
]
[
 
'
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
'
 
]
[
 
'
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
'
j
o
m
r
e
s
s
e
s
s
i
o
n
'
 
=
>
 
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
,
 
'
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
'
 
=
>
 
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
,
 
'
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
'
 
=
>
 
$
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
)
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
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
3
0
2
0
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
 
/
/
 
T
r
i
g
g
e
r
 
t
h
e
 
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
 
m
i
n
i
-
c
o
m
p

 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
:
 
'
.
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
 
'
0
3
0
2
0
'
 
]
)
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
 
'
0
3
0
2
0
'
 
]
[
 
'
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
'
 
]
[
 
'
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
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
:
 
I
n
s
e
r
t
 
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
 
'
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
r
m
a
t
i
o
n
P
a
g
e
R
e
q
u
i
r
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
:
O
u
t
p
u
t
t
i
n
g
 
c
o
n
f
i
r
m
a
t
i
o
n
 
p
a
g
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
 
(
i
n
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
 
=
>
 
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
'
c
u
s
t
o
m
T
e
x
t
'
 
=
>
 
$
c
u
s
t
o
m
T
e
x
t
F
o
r
C
o
n
f
i
r
m
a
t
i
o
n
F
o
r
m
)
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
3
0
3
0
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
 
/
/
 
B
o
o
k
i
n
g
 
c
o
m
p
l
e
t
e
d
 
m
e
s
s
a
g
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
B
O
O
K
I
N
G
S
A
V
E
D
M
E
S
S
A
G
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
B
O
O
K
I
N
G
S
A
V
E
D
M
E
S
S
A
G
E
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
e
d
i
t
_
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
.
'
&
t
a
s
k
=
e
d
i
t
_
d
e
p
o
s
i
t
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
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
 
'
0
3
0
2
0
'
 
]
[
 
'
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
'
 
]
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
<
h
2
>
R
e
s
e
t
t
i
n
g
 
t
e
m
p
 
b
o
o
k
i
n
g
 
d
a
t
a
<
/
h
2
>
'
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
-
>
r
e
s
e
t
T
e
m
p
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
 
'
0
3
0
2
0
'
 
]
[
 
'
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
'
 
]
[
 
'
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
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
I
f
 
t
h
e
r
e
'
s
 
a
 
f
a
i
l
u
r
e
 
a
t
 
t
h
i
s
 
p
o
i
n
t
 
i
t
 
s
h
o
u
l
d
n
'
t
 
b
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
e
 
g
u
e
s
t
 
c
a
n
c
e
l
l
e
d
 
a
t
 
a
n
y
 
s
t
a
g
e
.
 
T
h
i
s
 
i
s
 
i
n
t
e
n
d
e
d
 
t
o
 
t
r
a
p
 
e
r
r
o
r
s
 
t
h
a
t
 
s
h
o
u
l
d
n
'
t
 
b
e
 
p
a
s
s
e
d
 
t
o
 
t
h
e
 
g
u
e
s
t
 
o
n
 
t
h
e
 
s
i
t
e

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
j
e
c
t
 
=
 
"
I
n
s
e
r
t
 
o
f
 
b
o
o
k
i
n
g
 
f
a
i
l
e
d
.
 
L
i
k
e
l
y
 
c
a
u
s
e
d
 
b
y
 
a
 
d
a
t
a
b
a
s
e
 
i
n
s
e
r
t
 
f
u
n
c
t
i
o
n
 
f
a
i
l
u
r
e
.
\
n
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
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
*
*

 
*
 
U
s
e
d
 
d
u
r
i
n
g
 
t
h
e
 
i
n
s
e
r
t
 
i
n
t
e
r
n
e
t
 
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
 
T
a
k
e
s
 
g
u
e
s
t
 
d
a
t
a
 
f
r
o
m
 
t
h
e
 
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
s
 
t
a
b
l
e
 
a
n
d
 
i
n
s
e
r
t
s
 
i
t
 
i
n
t
o
 
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
 
(
o
r
 
u
p
d
a
t
e
s
 
s
a
m
e
,
 
d
e
p
e
n
d
i
n
g
 
o
n
 
t
h
e
 
v
a
l
u
e
 
o
f
 
$
e
x
i
s
t
i
n
g
_
i
d
)
.

 
*
/

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
(
$
j
o
m
r
e
s
s
e
s
s
i
o
n
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
x
C
u
s
t
o
m
e
r
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
x
C
u
s
t
o
m
e
r
s
[
 
'
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
x
C
u
s
t
o
m
e
r
s
[
 
'
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
'
 
]
;

 
 
 
 
}


 
 
 
 
$
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
 
(
i
n
t
)
 
$
x
C
u
s
t
o
m
e
r
s
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
e
x
i
s
t
i
n
g
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
x
C
u
s
t
o
m
e
r
s
[
 
'
e
x
i
s
t
i
n
g
_
i
d
'
 
]
;

 
 
 
 
$
e
m
a
i
l
 
=
 
$
x
C
u
s
t
o
m
e
r
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
;

 
 
 
 
$
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
x
C
u
s
t
o
m
e
r
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
;

 
 
 
 
$
s
u
r
n
a
m
e
 
=
 
$
x
C
u
s
t
o
m
e
r
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
h
o
u
s
e
 
=
 
$
x
C
u
s
t
o
m
e
r
s
[
 
'
h
o
u
s
e
'
 
]
;

 
 
 
 
$
s
t
r
e
e
t
 
=
 
$
x
C
u
s
t
o
m
e
r
s
[
 
'
s
t
r
e
e
t
'
 
]
;

 
 
 
 
$
t
o
w
n
 
=
 
$
x
C
u
s
t
o
m
e
r
s
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
$
r
e
g
i
o
n
 
=
 
$
x
C
u
s
t
o
m
e
r
s
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
$
c
o
u
n
t
r
y
 
=
 
$
x
C
u
s
t
o
m
e
r
s
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
$
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
x
C
u
s
t
o
m
e
r
s
[
 
'
p
o
s
t
c
o
d
e
'
 
]
;

 
 
 
 
$
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
x
C
u
s
t
o
m
e
r
s
[
 
'
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
'
 
]
;

 
 
 
 
$
m
o
b
i
l
e
 
=
 
$
x
C
u
s
t
o
m
e
r
s
[
 
'
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
'
 
]
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
P
r
o
p
e
r
t
y
I
d
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
$
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
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
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
0
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
i
s
_
p
a
r
t
n
e
r
)
 
{

 
 
 
 
 
 
 
 
$
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
 
0
;

 
 
 
 
}


 
 
 
 
i
f
 
(
$
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
.
"
'
 
A
N
D
 
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
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
x
i
s
t
i
n
g
G
u
e
s
t
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
x
i
s
t
i
n
g
G
u
e
s
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
x
i
s
t
i
n
g
G
u
e
s
t
s
 
a
s
 
$
g
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
u
i
d
 
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
0
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
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
_
i
d
 
>
 
0
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
u
i
d
 
=
 
$
e
x
i
s
t
i
n
g
_
i
d
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
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
 
=
 
0
;

 
 
 
 
}


 
 
 
 
i
f
 
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
g
u
e
s
t
s
 
S
E
T
 
`
f
i
r
s
t
n
a
m
e
`
=
'
$
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
,
`
s
u
r
n
a
m
e
`
=
'
$
s
u
r
n
a
m
e
'
,
`
h
o
u
s
e
`
=
'
$
h
o
u
s
e
'
,
`
s
t
r
e
e
t
`
=
'
$
s
t
r
e
e
t
'
,

	
	
`
t
o
w
n
`
=
 
'
$
t
o
w
n
'
,
`
c
o
u
n
t
y
`
=
 
'
$
r
e
g
i
o
n
'
,
`
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
$
c
o
u
n
t
r
y
'
,
`
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
$
p
o
s
t
c
o
d
e
'
,
`
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
`
=
 
'
$
l
a
n
d
l
i
n
e
'
,
`
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
`
=
 
'
$
m
o
b
i
l
e
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
u
i
d
`
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
,
`
e
m
a
i
l
`
=
'
$
e
m
a
i
l
'

	
	
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
"
.
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
u
i
d
.
"
'
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
i
d
 
=
 
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
g
u
e
s
t
s

	
	
(
`
f
i
r
s
t
n
a
m
e
`
,
`
s
u
r
n
a
m
e
`
,
`
h
o
u
s
e
`
,
`
s
t
r
e
e
t
`
,
`
t
o
w
n
`
,
`
c
o
u
n
t
y
`
,
`
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
o
s
t
c
o
d
e
`
,
`
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
`
,
`
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
u
i
d
`
,
`
e
m
a
i
l
`
'
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
'
,
`
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
`
'
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
)
 
V
A
L
U
E
S
 
(
'
$
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
,
'
$
s
u
r
n
a
m
e
'
,
'
$
h
o
u
s
e
'
,
'
$
s
t
r
e
e
t
'
,
'
$
t
o
w
n
'
,
'
$
r
e
g
i
o
n
'
,
'
$
c
o
u
n
t
r
y
'
,
'
$
p
o
s
t
c
o
d
e
'
,
'
$
l
a
n
d
l
i
n
e
'
,
'
$
m
o
b
i
l
e
'
,
'
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
'
,
'
$
e
m
a
i
l
'
"
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
"
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
'
)
'
;

 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
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
 
f
a
l
s
e
)
;

 
 
 
 
}


 
 
 
 
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
i
s
_
p
a
r
t
n
e
r
)
 
{

 
 
 
 
 
 
 
 
/
/
 
N
e
w
 
f
o
r
 
4
.
5
.
9
.
 
W
e
 
n
e
e
d
 
n
o
w
 
t
o
 
l
o
o
k
 
i
n
 
t
h
e
 
n
e
w
 
g
u
e
s
t
 
p
r
o
f
i
l
e
 
t
a
b
l
e
 
a
n
d
 
s
e
e
 
i
f
 
t
h
i
s
 
u
s
e
r
 
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
.
 
I
f
 
t
h
e
y
 
d
o
 
n
o
t
,
 
w
e
'
l
l
 
t
a
k
e
 
t
h
e
s
e
 
d
e
t
a
i
l
s
 
a
n
d
 
a
d
d
 
t
h
e
m
 
t
o
 
t
h
e
 
p
r
o
f
i
l
e
 
t
a
b
l
e
 
t
o
o
,
 
t
h
e
n
 
i
n
 
f
u
t
u
r
e
 
t
h
e
 
p
r
o
f
i
l
e
 
t
a
b
l
e
'
s
 
d
a
t
a
 
w
i
l
l
 
b
e
 
u
s
e
d
 
a
s
 
t
h
e
 
p
r
i
m
a
r
y
 
s
o
u
r
c
e
 
o
f
 
t
h
i
s
 
g
u
e
s
t
'
s
 
i
n
f
o
r
m
a
t
i
o
n
,
 
c
o
n
t
i
n
u
i
n
g
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
g
u
e
s
t
 
d
e
t
a
i
l
s
 
a
r
e
 
n
o
t
 
s
h
a
r
e
d
 
b
e
t
w
e
e
n
 
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
.
 
N
o
 
p
r
o
p
e
r
t
y
 
s
h
o
u
l
d
 
e
v
e
r
 
b
e
 
a
b
l
e
 
t
o
 
a
c
c
e
s
s
 
a
 
g
u
e
s
t
'
s
 
d
e
t
a
i
l
s
 
u
n
l
e
s
s
 
t
h
a
t
 
g
u
e
s
t
 
h
a
s
 
a
l
r
e
a
d
y
 
b
o
o
k
e
d
 
w
i
t
h
 
t
h
a
t
 
p
r
o
p
e
r
t
y
.

 
 
 
 
 
 
 
 
/
/
 
F
i
r
s
t
,
 
w
e
'
l
l
 
l
o
o
k
 
a
t
 
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
 
i
d
.
 
I
f
 
i
t
'
s
 
t
h
e
 
s
a
m
e
 
a
s
 
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
 
a
b
o
v
e
,
 
t
h
e
n
 
t
h
e
 
u
s
e
r
 
m
a
k
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
 
i
s
 
a
 
g
u
e
s
t
.

 
 
 
 
 
 
 
 
i
f
 
(
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
 
=
=
 
$
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
i
d
 
>
 
0
)
 
|
|
 
(
$
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
 
>
 
0
 
&
&
 
i
s
s
e
t
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
[
'
j
s
i
d
'
]
)
)
)
 
{
 
/
/
 
E
i
t
h
e
r
 
i
t
'
s
 
t
h
e
 
g
u
e
s
t
 
m
a
k
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
,
 
o
r
 
i
t
'
s
 
a
 
g
a
t
e
w
a
y
 
c
a
l
l
 
a
n
d
 
t
h
e
 
u
s
e
r
'
s
 
a
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
.
 
E
i
t
h
e
r
 
w
a
y
,
 
w
e
 
c
a
n
 
u
p
d
a
t
e
 
t
h
e
 
p
r
o
f
i
l
e
 
t
a
b
l
e
.

 
 
 
 
 
 
 
 
 
 
 
 
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
p
r
o
f
i
l
e
_
i
d
 
=
=
 
0
)
 
{
 
/
/
 
T
h
e
 
g
u
e
s
t
 
d
o
e
s
n
'
t
 
h
a
v
e
 
i
n
f
o
r
m
a
t
i
o
n
 
i
n
 
t
h
e
 
p
r
o
f
i
l
e
 
t
a
b
l
e
 
y
e
t
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
 
(
`
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
`
,
`
f
i
r
s
t
n
a
m
e
`
,
`
s
u
r
n
a
m
e
`
,
`
h
o
u
s
e
`
,
`
s
t
r
e
e
t
`
,
`
t
o
w
n
`
,
`
c
o
u
n
t
y
`
,
`
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
o
s
t
c
o
d
e
`
,
`
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
`
,
`
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
`
,
`
e
m
a
i
l
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
(
i
n
t
)
 
$
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
.
"
'
,
'
$
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
,
'
$
s
u
r
n
a
m
e
'
,
'
$
h
o
u
s
e
'
,
'
$
s
t
r
e
e
t
'
,
'
$
t
o
w
n
'
,
'
$
r
e
g
i
o
n
'
,
'
$
c
o
u
n
t
r
y
'
,
'
$
p
o
s
t
c
o
d
e
'
,
'
$
l
a
n
d
l
i
n
e
'
,
'
$
m
o
b
i
l
e
'
,
'
$
e
m
a
i
l
'
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
i
f
 
(
!
$
r
e
t
u
r
n
i
d
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
 
s
a
v
i
n
g
 
u
s
e
r
s
 
d
e
t
a
i
l
s
'
;

 
 
 
 
 
 
 
 
e
x
i
t
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
i
s
_
p
a
r
t
n
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
g
u
e
s
t
s
 
S
E
T
 
`
p
a
r
t
n
e
r
_
i
d
`
=
'
.
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
"
.
(
i
n
t
)
 
$
r
e
t
u
r
n
i
d
.
"
'
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
,
 
'
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
r
e
t
u
r
n
i
d
;

}


/
*
*

 
*
 
R
e
c
e
i
v
e
s
 
a
 
d
a
t
e
 
y
y
y
y
/
m
m
/
d
d
 
f
r
o
m
 
t
h
e
 
s
y
s
t
e
m
 
a
n
d
 
c
o
n
v
e
r
t
s
 
i
t
 
t
o
 
t
h
e
 
c
o
n
f
i
g
u
r
e
d
 
o
u
t
p
u
t
 
f
o
r
m
a
t
.

 
*
/

f
u
n
c
t
i
o
n
 
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
t
h
e
d
a
t
e
)

{

 
 
 
 
/
/
 
A
s
s
u
m
e
s
 
t
h
e
 
d
a
t
e
 
$
t
h
e
D
a
t
e
 
c
o
m
e
s
 
f
r
o
m
 
t
h
e
 
s
y
s
t
e
m
 
i
n
 
t
h
e
 
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


 
 
 
 
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
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
'
)
)
 
{

 
 
 
 
 
 
 
 
$
t
h
e
d
a
t
e
 
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
'
,
 
'
-
'
,
 
$
t
h
e
d
a
t
e
)
;


 
 
 
 
 
 
 
 
$
f
o
r
m
a
t
t
e
d
D
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
t
h
e
d
a
t
e
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
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
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
t
h
e
d
a
t
e
)
;

 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
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
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
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
f
o
r
m
a
t
t
e
d
D
a
t
e
 
=
 
d
a
t
e
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
c
a
l
_
o
u
t
p
u
t
'
 
]
,
 
$
u
n
i
x
D
a
t
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
a
t
t
e
d
D
a
t
e
 
=
 
s
t
r
f
t
i
m
e
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
c
a
l
_
o
u
t
p
u
t
'
 
]
,
 
$
u
n
i
x
D
a
t
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
f
o
r
m
a
t
t
e
d
D
a
t
e
;

}


/
*
*

 
*
 
M
a
k
e
s
 
t
h
e
 
d
a
t
e
 
f
o
r
 
d
i
s
p
l
a
y
 
i
n
 
t
h
e
 
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
 
c
a
l
e
n
d
a
r
.
 
W
i
l
l
 
r
e
c
e
i
v
e
 
a
 
y
y
y
y
/
m
m
/
d
d
 
f
o
r
m
a
t
t
e
d
 
s
t
r
i
n
g
 
a
n
d
 
o
u
t
p
u
t
 
i
t
 
i
n
 
t
h
e
 
f
o
r
m
a
t
 
d
e
s
i
r
e
d
 
b
y
 
c
o
n
f
i
g
u
r
a
t
i
o
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
/

f
u
n
c
t
i
o
n
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
i
n
p
u
t
D
a
t
e
,
 
$
s
i
t
e
C
a
l
 
=
 
f
a
l
s
e
)

{

 
 
 
 
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


 
 
 
 
/
/
 
L
e
t
s
 
m
a
k
e
 
t
h
e
 
c
a
l
e
n
d
a
r
 
d
a
t
e
s
 
f
o
r
 
d
i
s
p
l
a
y
 
i
n
 
t
h
e
 
j
s
 
c
a
l
e
n
d
a
r
.
 
w
i
l
l
 
r
e
c
e
i
v
e
 
a
 
Y
/
m
/
d
 
f
o
r
m
a
t
t
e
d
 
s
t
r
i
n
g
 
&
	
o
u
t
p
u
t
 
i
t
 
i
n
 
t
h
e
 
d
e
s
i
r
e
d
 
f
o
r
m
a
t

 
 
 
 
/
/
 
m
 
d
 
y
.
 
P
r
o
b
a
b
l
y
 
u
n
n
e
c
c
e
s
a
r
y
,
 
b
u
t
 
w
e
'
l
l
 
d
o
 
i
t
 
a
n
y
w
a
y
,
 
t
o
 
b
e
 
o
n
 
t
h
e
 
s
a
f
e
 
s
i
d
e
.

 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
(
i
n
t
)
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
(
i
n
t
)
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
(
i
n
t
)
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
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
c
a
l
_
i
n
p
u
t
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
a
t
e
F
o
r
m
a
t
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
'
%
d
/
%
m
/
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
d
/
m
/
Y
'
,
 
$
u
n
i
x
D
a
t
e
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
%
Y
/
%
m
/
%
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
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
,
 
$
u
n
i
x
D
a
t
e
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
%
m
/
%
d
/
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
m
/
d
/
Y
'
,
 
$
u
n
i
x
D
a
t
e
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
%
d
-
%
m
-
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
d
-
m
-
Y
'
,
 
$
u
n
i
x
D
a
t
e
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
%
Y
-
%
m
-
%
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
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
'
,
 
$
u
n
i
x
D
a
t
e
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
%
m
-
%
d
-
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
m
-
d
-
Y
'
,
 
$
u
n
i
x
D
a
t
e
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
%
d
.
%
m
.
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
d
.
m
.
Y
'
,
 
$
u
n
i
x
D
a
t
e
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
 
i
n
 
d
a
t
e
 
f
o
r
m
a
t
.
 
C
a
n
n
o
t
 
c
o
n
t
i
n
u
e
.
 
I
f
 
y
o
u
 
h
a
v
e
 
j
u
s
t
 
i
n
s
t
a
l
l
e
d
 
J
o
m
r
e
s
 
y
o
u
 
s
h
o
u
l
d
 
l
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
.
 
T
h
i
s
 
w
i
l
l
 
s
e
t
 
u
p
 
s
u
f
f
i
c
i
e
n
t
 
d
a
t
a
 
s
o
 
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
 
p
r
o
c
e
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
t
h
e
D
a
t
e
;

}


/
*
*

 
*
 
C
o
n
v
e
r
t
s
 
a
 
d
a
t
e
 
t
h
a
t
 
w
a
s
 
s
u
p
p
l
i
e
d
 
b
y
 
t
h
e
 
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
 
c
a
l
e
n
d
a
r
 
i
n
t
o
 
y
y
y
y
/
m
m
/
d
d
 
f
o
r
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
u
s
e
.

 
*
/

f
u
n
c
t
i
o
n
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
i
n
p
u
t
D
a
t
e
,
 
$
s
i
t
e
C
a
l
 
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
i
n
p
u
t
D
a
t
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
 
'
'
;

 
 
 
 
}

 
 
 
 
/
/
 
L
e
t
s
 
c
o
n
v
e
r
t
 
t
h
e
 
i
n
p
u
t
 
c
a
l
e
n
d
a
r
 
d
a
t
e
s
 
t
o
 
Y
/
m
/
d

 
 
 
 
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
d
a
t
e
F
o
r
m
a
t
 
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
c
a
l
_
i
n
p
u
t
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
a
t
e
F
o
r
m
a
t
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
'
%
d
/
%
m
/
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
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
%
Y
/
%
m
/
%
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
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
%
m
/
%
d
/
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
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
%
d
-
%
m
-
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
-
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
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
%
Y
-
%
m
-
%
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
-
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
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
%
m
-
%
d
-
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
-
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
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
%
d
.
%
m
.
%
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
.
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
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
 
i
n
 
d
a
t
e
 
f
o
r
m
a
t
.
 
C
a
n
n
o
t
 
c
o
n
t
i
n
u
e
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
}

 
 
 
 
$
t
h
e
D
a
t
e
 
=
 
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
,
 
$
u
n
i
x
D
a
t
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
t
h
e
D
a
t
e
;

}


/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

/
/
-
E
 
D
 
I
 
T
	
G
 
A
 
T
 
E
 
W
 
A
 
Y

/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


/
*
*

 
*
 
I
m
p
o
r
t
s
 
s
e
t
t
i
n
g
s
 
f
r
o
m
 
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
.
p
h
p
 
f
o
r
 
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
i
e
s
,
 
o
r
 
i
m
p
o
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
n
t
o
 
t
h
e
 
d
b
 
d
u
r
i
n
g
 
i
n
s
t
a
l
l
.

 
*
/

/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

/
/
-
I
 
M
 
P
 
O
 
R
 
T
	
S
 
E
 
T
 
T
 
I
 
N
 
G
 
S

/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


f
u
n
c
t
i
o
n
 
i
m
p
o
r
t
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
,
 
$
s
o
u
r
c
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
u
i
d
 
=
 
0
)

{

 
 
 
 
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

 
 
 
 
i
f
 
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
 
=
=
 
0
)
 
{
 
/
/
 
W
e
'
r
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
,
 
s
o
 
a
l
l
 
s
e
t
t
i
n
g
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
e
r
t
e
d
 
f
r
o
m
 
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
.
p
h
p
 
i
n
t
o
 
t
h
e
 
d
a
t
a
b
a
s
e
.
 
W
e
'
l
l
 
u
s
e
 
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
 
0
 
t
o
 
c
r
e
a
t
e
 
b
a
s
e
l
i
n
e
 
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
a
t
 
a
l
l
 
o
t
h
e
r
 
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
 
w
i
l
l
 
u
s
e
 
a
s
 
t
h
e
i
r
 
d
e
f
a
u
l
t
 
w
h
e
n
 
t
h
e
y
 
c
a
l
l
 
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

 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
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
.
p
h
p
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
m
r
C
o
n
f
i
g
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
s
e
r
t
S
e
t
t
i
n
g
(
0
,
 
$
k
,
 
$
v
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
"
E
r
r
o
r
,
 
c
o
u
l
d
n
'
t
 
i
m
p
o
r
t
 
s
e
t
t
i
n
g
 
"
.
$
k
.
'
 
-
 
'
.
$
v
.
'
 
f
o
r
 
p
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
 
0
 
i
n
t
o
 
t
h
e
 
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
 
t
a
b
l
e
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
 
W
e
 
h
a
v
e
 
c
r
e
a
t
e
d
 
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
 
a
n
d
 
a
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
 
t
h
e
i
r
 
d
e
f
a
u
l
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
n
t
o
 
t
h
e
 
d
b
 
b
y
 
p
u
l
l
i
n
g
 
t
h
e
 
d
e
f
a
u
l
t
 
s
e
t
t
i
n
g
s
 
f
r
o
m
 
t
h
e
 
0
 
p
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
 
l
i
s
t

 
 
 
 
 
 
 
 
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
 
a
k
e
y
,
v
a
l
u
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
.
$
s
o
u
r
c
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
u
i
d
.
"
 
A
N
D
 
a
k
e
y
 
=
 
'
"
.
$
k
.
"
'
"
;

 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
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
s
e
t
t
i
n
g
s
L
i
s
t
 
a
s
 
$
s
e
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
s
e
r
t
S
e
t
t
i
n
g
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
,
 
$
s
e
t
-
>
a
k
e
y
,
 
$
s
e
t
-
>
v
a
l
u
e
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
"
E
r
r
o
r
,
 
c
o
u
l
d
n
'
t
 
i
m
p
o
r
t
 
s
e
t
t
i
n
g
 
"
.
$
s
e
t
-
>
a
k
e
y
.
'
 
-
 
'
.
$
s
e
t
-
>
v
a
l
u
e
.
'
 
f
o
r
 
p
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
 
'
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
u
i
d
.
'
 
i
n
t
o
 
t
h
e
 
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
 
t
a
b
l
e
 
'
)
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
;

}



/
*
*

 
*
 
I
n
s
e
r
t
s
 
o
r
 
u
p
d
a
t
e
s
 
a
 
p
l
u
g
i
n
'
s
 
s
e
t
t
i
n
g
s

 
*
/

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
s
e
r
t
S
e
t
t
i
n
g
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
,
 
$
k
,
 
$
v
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
 
v
a
l
u
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
 
A
N
D
 
a
k
e
y
 
=
 
'
"
.
$
k
.
"
'
"
;

 
 
 
 
$
s
e
t
t
i
n
g
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

 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
e
t
t
i
n
g
s
L
i
s
t
)
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
,
a
k
e
y
,
v
a
l
u
e
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
,
'
"
.
$
k
.
"
'
,
'
"
.
$
v
.
"
'
)
"
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
s
e
t
t
i
n
g
s
 
S
E
T
 
`
v
a
l
u
e
`
=
'
"
.
$
v
.
"
'
 
W
H
E
R
E
 
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
 
a
n
d
 
a
k
e
y
 
=
 
'
"
.
$
k
.
"
'
"
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
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


/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

/
/
 
G
 
A
 
T
 
E
 
W
 
A
 
Y
	
C
 
O
 
N
 
F
 
I
 
G
 
-
-
-

/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


/
*
*

 
*
 
S
a
v
e
s
 
a
 
p
l
u
g
i
n
'
s
 
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
/

f
u
n
c
t
i
o
n
 
s
a
v
e
P
l
u
g
i
n
(
$
p
l
u
g
i
n
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

 
 
 
 
f
o
r
e
a
c
h
 
(
$
_
P
O
S
T
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
$
d
i
r
t
y
 
=
 
(
s
t
r
i
n
g
)
 
$
k
;

 
 
 
 
 
 
 
 
$
k
 
=
 
R
e
m
o
v
e
X
S
S
(
$
d
i
r
t
y
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
k
 
!
=
 
'
t
a
s
k
'
 
&
&
 
$
k
 
!
=
 
'
p
l
u
g
i
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
s
[
 
$
k
 
]
 
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
P
O
S
T
,
 
$
k
,
 
'
'
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
v
a
l
u
e
s
 
a
s
 
$
k
 
=
>
 
$
v
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
p
l
u
g
i
n
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
 
p
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
.
"
'
 
A
N
D
 
p
l
u
g
i
n
 
=
 
'
$
p
l
u
g
i
n
'
 
A
N
D
 
s
e
t
t
i
n
g
 
=
 
'
$
k
'
"
;

 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
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
s
e
t
t
i
n
g
L
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
e
t
t
i
n
g
L
i
s
t
 
a
s
 
$
s
e
t
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
=
$
s
e
t
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
 
 
 
 
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
l
u
g
i
n
s
e
t
t
i
n
g
s
 
S
E
T
 
`
v
a
l
u
e
`
=
'
$
v
'
 
W
H
E
R
E
 
p
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
.
"
'
 
A
N
D
 
p
l
u
g
i
n
 
=
 
'
$
p
l
u
g
i
n
'
 
A
N
D
 
s
e
t
t
i
n
g
 
=
 
'
$
k
'
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
P
L
U
G
I
N
S
_
U
P
D
A
T
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
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
U
P
D
A
T
E
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
j
o
m
r
e
s
_
p
l
u
g
i
n
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
i
d
`
,
`
p
l
u
g
i
n
`
,
`
s
e
t
t
i
n
g
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
"
 
.
(
i
n
t
)
 
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
.
"
'
,
'
$
p
l
u
g
i
n
'
,
'
$
k
'
,
'
$
v
'
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
P
L
U
G
I
N
S
_
I
N
S
E
R
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
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
I
N
S
E
R
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
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
B
A
C
K
E
N
D
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
p
l
u
g
i
n
_
s
a
v
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
d
i
s
p
l
a
y
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


/
*
*

 
*
 
R
e
t
u
r
n
s
 
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
'
s
 
n
a
m
e
 
w
h
e
n
 
p
a
s
s
e
d
 
a
 
p
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
.

 
*
/

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
P
r
o
p
e
r
t
y
N
a
m
e
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

{

 
 
 
 
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

 
 
 
 
i
f
 
(
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
'
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
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
n
a
m
e
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

}


/
*
*

 
*
 
W
o
r
k
s
 
o
u
t
 
t
h
e
 
d
i
f
f
e
r
e
n
c
e
 
b
e
t
w
e
e
n
 
t
w
o
 
d
a
t
e
s
 
i
n
 
d
a
y
s
.

 
*
/

f
u
n
c
t
i
o
n
 
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
 
$
f
i
r
s
t
_
d
a
t
e
,
 
$
s
e
c
o
n
d
_
d
a
t
e
)

{

 
 
 
 
$
a
 
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
/
'
,
 
$
f
i
r
s
t
_
d
a
t
e
)
;

 
 
 
 
$
b
 
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
/
'
,
 
$
s
e
c
o
n
d
_
d
a
t
e
)
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
a
[
0
]
)
 
<
 
4
 
|
|
 
s
t
r
l
e
n
(
$
b
[
0
]
)
 
<
 
4
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
1
;

 
 
 
 
}


 
 
 
 
i
f
 
(
c
h
e
c
k
d
a
t
e
(
$
a
[
1
]
,
 
$
a
[
2
]
,
 
$
a
[
0
]
)
 
&
&
 
c
h
e
c
k
d
a
t
e
(
$
b
[
1
]
,
 
$
b
[
2
]
,
 
$
b
[
0
]
)
)
 
{

 
 
 
 
 
 
 
 
$
d
a
t
e
t
i
m
e
1
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
$
f
i
r
s
t
_
d
a
t
e
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
t
i
m
e
2
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
$
s
e
c
o
n
d
_
d
a
t
e
)
;

 
 
 
 
 
 
 
 
$
d
i
f
f
 
=
 
$
d
a
t
e
t
i
m
e
1
-
>
d
i
f
f
(
$
d
a
t
e
t
i
m
e
2
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
i
n
t
e
r
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
i
f
f
-
>
d
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
w
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
i
f
f
-
>
w
e
e
k
s
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
i
f
f
-
>
d
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
1
;

}


/
*
*

 
*
 
U
s
e
d
 
b
y
 
e
d
i
t
 
r
e
s
o
u
r
c
e
 
s
c
r
i
p
t
 
t
o
 
s
h
o
w
 
r
o
o
m
 
i
m
a
g
e

 
*

 
*
 
U
p
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
a
l
i
t
y
 
i
n
 
j
0
6
0
0
2
e
d
i
t
_
r
e
s
o
u
r
c
e
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
 
t
o
 
u
s
e
 
m
o
d
e
r
n
 
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
 
a
n
d
 
r
e
m
o
v
e
 
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

 
*

 
*
/

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
m
a
g
e
F
o
r
P
r
o
p
e
r
t
y
(
$
i
m
a
g
e
T
y
p
e
,
 
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
,
 
$
i
t
e
m
U
i
d
)

{

 
 
 
 
$
f
i
l
e
L
o
c
a
t
i
o
n
 
=
 
f
a
l
s
e
;

 
 
 
 
s
w
i
t
c
h
 
(
$
i
m
a
g
e
T
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
p
r
o
p
e
r
t
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
_
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
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
r
l
o
g
o
.
p
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
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
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
u
i
d
.
'
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
'
.
$
i
t
e
m
U
i
d
.
'
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
L
o
c
a
t
i
o
n
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
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
u
i
d
.
'
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
'
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
u
i
d
.
'
.
j
p
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
L
o
c
a
t
i
o
n
 
=
 
$
d
e
f
a
u
l
t
_
i
m
a
g
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
o
m
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
_
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
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
n
o
i
m
a
g
e
.
g
i
f
'
;

 
 
 
 
 
 
 
 
 
 
 
 
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
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
u
i
d
.
'
_
r
o
o
m
_
'
.
$
i
t
e
m
U
i
d
.
'
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
L
o
c
a
t
i
o
n
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
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
u
i
d
.
'
_
r
o
o
m
_
'
.
$
i
t
e
m
U
i
d
.
'
.
j
p
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
L
o
c
a
t
i
o
n
 
=
 
$
d
e
f
a
u
l
t
_
i
m
a
g
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
r
e
t
u
r
n
 
$
f
i
l
e
L
o
c
a
t
i
o
n
;

}


/
*
*

 
*
 
C
o
n
s
t
r
u
c
t
s
 
t
h
e
 
m
r
C
o
n
f
i
g
 
d
a
t
a
 
w
h
e
n
 
p
a
s
s
e
d
 
a
 
p
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
.

 
*
/

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
 
=
 
n
u
l
l
)

{

 
 
 
 
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
r
o
p
e
r
t
y
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


 
 
 
 
i
f
 
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
C
o
n
f
i
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
=
 
0
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
C
o
n
f
i
g
-
>
i
n
i
t
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

 
 
 
 
}


 
 
 
 
i
f
 
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
 
=
=
 
n
u
l
l
)
 
{

 
 
 
 
 
 
 
 
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
 
$
p
r
o
p
e
r
t
y
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

 
 
 
 
}
 
e
l
s
e
 
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
 
!
=
 
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
C
o
n
f
i
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
C
o
n
f
i
g
-
>
l
o
a
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
_
c
o
n
f
i
g
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
 
$
p
r
o
p
e
r
t
y
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
$
p
r
o
p
e
r
t
y
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
m
r
C
o
n
f
i
g
;

}


/
*
*

 
*
 
G
e
n
e
r
i
c
 
o
r
 
c
r
e
a
t
i
o
n
 
f
u
n
c
t
i
o
n
.
 
P
a
s
s
 
a
 
n
u
m
b
e
r
 
o
f
 
i
d
s
 
a
n
d
 
t
h
e
 
f
i
e
l
d
 
y
o
u
'
r
e
 
s
e
a
r
c
h
i
n
g
 
o
n
,
 
w
i
l
l
 
r
e
t
u
r
n
 
(
 
`
x
y
x
`
=
'
1
'
 
O
R
 
`
x
y
x
`
=
'
2
'
 
O
R
`
x
y
x
`
=
'
3
'
 
)
 
e
t
c
.

 
*
/

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
n
e
r
i
c
O
r
(
$
i
d
A
r
r
a
y
,
 
$
f
i
e
l
d
T
o
S
e
a
r
c
h
,
 
$
i
d
A
r
r
a
y
i
s
I
n
t
e
g
e
r
 
=
 
t
r
u
e
)

{

 
 
 
 
$
n
e
w
A
r
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
A
r
r
a
y
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
$
n
e
w
A
r
r
[
 
]
 
=
 
$
i
d
;

 
 
 
 
}

 
 
 
 
$
i
d
A
r
r
a
y
 
=
 
$
n
e
w
A
r
r
;

 
 
 
 
$
t
x
t
 
=
 
'
 
(
 
`
'
.
$
f
i
e
l
d
T
o
S
e
a
r
c
h
.
'
`
=
'
;

 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
c
o
u
n
t
(
$
i
d
A
r
r
a
y
)
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
A
r
r
a
y
i
s
I
n
t
e
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
(
i
n
t
)
 
$
i
d
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
i
d
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
x
t
 
.
=
 
"
 
'
$
i
d
'
 
"
;

 
 
 
 
 
 
 
 
i
f
 
(
$
i
 
<
 
c
o
u
n
t
(
$
i
d
A
r
r
a
y
)
 
-
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
x
t
 
.
=
 
'
 
O
R
 
`
'
.
$
f
i
e
l
d
T
o
S
e
a
r
c
h
.
'
`
=
 
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
$
t
x
t
 
.
=
 
'
 
)
 
'
;


 
 
 
 
r
e
t
u
r
n
 
$
t
x
t
;

}


/
*
*

 
*
 
P
u
b
l
i
s
h
 
t
h
e
 
u
s
e
r
'
s
 
p
r
o
p
e
r
t
y
.
 
T
o
g
g
l
e
 
a
c
t
i
o
n
.

 
*
/

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
,
 
0
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
 
0
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

	
}

	

	
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
i
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
i
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
i
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
s
_
u
i
d
 
=
 
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
;

 
 
 
 

	
i
f
 
(
!
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
a
p
p
r
o
v
e
d
)
 
{

 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
c
a
n
n
o
t
_
r
e
d
i
r
e
c
t
'
)
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
 
{

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
s
s
a
g
i
n
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
m
e
s
s
a
g
e
s
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
u
b
l
i
s
h
e
d
)
 
{

	
	
	
	
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
i
e
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
2
7
4
'
)
;
 
/
/
 
O
p
t
i
o
n
a
l
 
t
r
i
g
g
e
r
 
a
f
t
e
r
 
p
r
o
p
e
r
t
y
 
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

	
	
	
	

	
	
	
	
	
$
j
o
m
r
e
s
_
m
e
s
s
a
g
i
n
g
-
>
s
e
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
N
P
U
B
L
I
S
H
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
N
P
U
B
L
I
S
H
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

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
j
o
m
r
e
s
_
m
e
s
s
a
g
i
n
g
-
>
s
e
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
'
T
h
e
r
e
 
w
a
s
 
a
 
p
r
o
b
l
e
m
 
u
n
p
u
b
l
i
s
h
i
n
g
 
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
.
'
)
;

	
	
	
	
	

	
	
	
	
	
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
 
e
l
s
e
 
{

	
	
	
	
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
i
e
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
1
)
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
2
7
3
'
)
;
 
/
/
 
O
p
t
i
o
n
a
l
 
t
r
i
g
g
e
r
 
a
f
t
e
r
 
p
r
o
p
e
r
t
y
 
p
u
b
l
i
s
h
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
	
$
j
o
m
r
e
s
_
m
e
s
s
a
g
i
n
g
-
>
s
e
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
P
U
B
L
I
S
H
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
P
U
B
L
I
S
H
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

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
j
o
m
r
e
s
_
m
e
s
s
a
g
i
n
g
-
>
s
e
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
'
T
h
e
r
e
 
w
a
s
 
a
 
p
r
o
b
l
e
m
 
p
u
b
l
i
s
h
i
n
g
 
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
.
'
)
;

	
	
	
	
	

	
	
	
	
	
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
Y
o
u
 
n
a
u
g
h
t
y
 
l
i
t
t
l
e
 
t
i
n
k
e
r
,
 
t
h
a
t
'
s
 
n
o
t
 
y
o
u
r
 
p
r
o
p
e
r
t
y
"
;

	
	
	

	
	
	
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


/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

/
/
-
E
 
D
 
I
 
T
	
R
 
O
 
O
 
M
 
S
	
A
 
N
 
D
	
P
 
R
 
O
 
P
 
E
 
R
 
T
 
Y
	
D
 
E
 
T
 
A
 
I
 
L
 
S

/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


/
*
*

 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
e
d
i
t
o
r
 
a
r
e
a
 
a
s
 
a
 
t
e
x
t
 
s
t
r
i
n
g
 
f
o
r
 
i
n
c
l
u
s
i
o
n
 
i
n
 
a
 
t
e
m
p
l
a
t
e

 
*
/

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
o
r
A
r
e
a
T
e
x
t
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
;

}


/
*
*

 
*
 
I
n
c
r
e
m
e
n
t
s
 
t
h
e
 
p
c
o
u
n
t
e
r
 
t
a
b
l
e
 
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
 
c
l
i
c
k
e
d
 
a
n
d
 
s
e
t
s
 
a
 
c
o
o
k
i
e
 
t
o
 
s
a
y
 
t
h
a
t
 
t
h
i
s
 
u
s
e
r
 
h
a
s
 
c
l
i
c
k
e
d
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
o
p
e
r
t
y
C
l
i
c
k
e
d
(
$
p
_
u
i
d
)

{

 
 
 
 
/
/
$
s
e
s
s
i
o
n
C
o
o
k
i
e
N
a
m
e
	
=
 
m
d
5
(
 
'
s
i
t
e
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
)
;

 
 
 
 
$
c
o
o
k
i
e
n
a
m
e
 
=
 
"
j
o
m
r
e
s
p
$
p
_
u
i
d
"
;

 
 
 
 
$
a
l
r
e
a
d
y
C
l
i
c
k
e
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
C
O
O
K
I
E
,
 
$
c
o
o
k
i
e
n
a
m
e
,
 
'
0
'
)
;

 
 
 
 
i
f
 
(
!
$
a
l
r
e
a
d
y
C
l
i
c
k
e
d
)
 
{

 
 
 
 
 
 
 
 
@
s
e
t
c
o
o
k
i
e
(
$
c
o
o
k
i
e
n
a
m
e
,
 
'
1
'
,
 
t
i
m
e
(
)
 
+
 
6
0
 
*
 
6
0
 
*
 
2
4
 
*
 
3
0
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
j
o
m
r
e
s
_
p
c
o
u
n
t
e
r
 
(
`
c
o
u
n
t
`
,
 
`
p
_
u
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
1
,
 
"
.
(
i
n
t
)
$
p
_
u
i
d
.
"
)
 
O
N
 
D
U
P
L
I
C
A
T
E
 
K
E
Y
 
U
P
D
A
T
E
 
`
c
o
u
n
t
`
 
=
 
`
c
o
u
n
t
`
 
+
 
1
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
M
y
s
q
l
 
w
e
n
t
 
b
y
e
b
y
e
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


/
*
*

 
*
 
M
a
k
e
s
 
a
 
p
o
p
u
p
 
l
i
n
k
.

 
*
/

f
u
n
c
t
i
o
n
 
m
a
k
e
P
o
p
u
p
L
i
n
k
(
$
l
i
n
k
,
 
$
t
e
x
t
,
 
$
i
s
L
o
c
a
l
P
a
g
e
 
=
 
t
r
u
e
,
 
$
w
i
d
t
h
 
=
 
5
5
0
,
 
$
h
e
i
g
h
t
 
=
 
5
0
0
)

{

 
 
 
 
$
s
t
a
t
u
s
 
=
 
'
s
t
a
t
u
s
=
n
o
,
t
o
o
l
b
a
r
=
y
e
s
,
s
c
r
o
l
l
b
a
r
s
=
y
e
s
,
t
i
t
l
e
b
a
r
=
n
o
,
m
e
n
u
b
a
r
=
y
e
s
,
r
e
s
i
z
a
b
l
e
=
y
e
s
,
w
i
d
t
h
=
'
.
$
w
i
d
t
h
.
'
,
h
e
i
g
h
t
=
'
.
$
h
e
i
g
h
t
.
'
,
d
i
r
e
c
t
o
r
i
e
s
=
n
o
,
l
o
c
a
t
i
o
n
=
n
o
'
;

 
 
 
 
$
f
o
r
m
a
t
 
=
 
'
'
;

 
 
 
 
i
f
 
(
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
N
E
W
J
O
O
M
L
A
'
)
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
 
'
&
t
m
p
l
=
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
e
l
i
n
k
 
=
 
"
<
a
 
h
r
e
f
=
\
"
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
:
v
o
i
d
 
w
i
n
d
o
w
.
o
p
e
n
(
'
"
.
$
l
i
n
k
.
$
f
o
r
m
a
t
.
"
'
,
 
'
w
i
n
2
'
,
 
'
"
.
$
s
t
a
t
u
s
.
"
'
)
;
\
"
 
r
e
l
=
\
"
n
o
f
o
l
l
o
w
\
"
 
t
i
t
l
e
=
\
"
\
"
>
"
.
$
t
e
x
t
.
'
<
/
a
>
'
;


 
 
 
 
$
t
h
e
l
i
n
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
&
a
m
p
;
'
,
 
'
&
'
,
 
$
t
h
e
l
i
n
k
)
;

 
 
 
 
$
t
h
e
l
i
n
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
&
'
,
 
'
&
a
m
p
;
'
,
 
$
t
h
e
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
 
$
t
h
e
l
i
n
k
;

}


/
*
*

 
*
 
T
r
i
g
g
e
r
s
 
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
e
a
d
e
r
 
e
v
e
n
t
/
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

 
*
/

f
u
n
c
t
i
o
n
 
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
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
0
'
,
 
'
s
h
o
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
_
h
e
a
d
e
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
 
=
>
 
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
)
;

}


/
*
*

 
*
 
S
e
n
d
s
 
e
m
a
i
l
s
 
t
o
 
a
d
m
i
n
s
.

 
*
/

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
n
d
A
d
m
i
n
E
m
a
i
l
(
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
m
e
s
s
a
g
e
,
 
$
s
e
n
d
_
p
o
s
t
 
=
 
f
a
l
s
e
)

{

 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
 
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
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
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
;


 
 
 
 
$
m
 
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
a
r
r
a
y
(
$
m
e
s
s
a
g
e
)
 
&
&
 
!
e
m
p
t
y
(
$
m
e
s
s
a
g
e
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
m
e
s
s
a
g
e
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
 
.
=
 
$
k
.
'
 
-
 
'
.
$
v
.
'
\
n
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
$
m
;

 
 
 
 
}

 
 
 
 
i
f
 
(
i
s
_
o
b
j
e
c
t
(
$
m
e
s
s
a
g
e
)
)
 
{

 
 
 
 
 
 
 
 
$
m
 
=
 
p
r
i
n
t
_
r
(
$
m
e
s
s
a
g
e
)
;

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
$
m
;

 
 
 
 
}


 
 
 
 
i
f
 
(
$
s
e
n
d
_
p
o
s
t
)
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
.
=
 
"
\
n
\
n
\
n
P
o
s
t
 
d
e
t
a
i
l
s
 
f
o
l
l
o
w
 
(
m
a
y
 
n
o
t
 
b
e
 
a
p
p
l
i
c
a
b
l
e
 
t
o
 
e
m
a
i
l
)
 
"
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
_
P
O
S
T
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
.
=
 
"
\
n
$
k
e
y
:
 
$
v
a
l
u
e
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
a
d
m
i
n
s
 
=
 
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
a
d
m
i
n
s
 
a
s
 
$
a
d
m
i
n
)
 
{

 
 
 
 
 
 
 
 
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
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
,
 
$
a
d
m
i
n
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
m
e
s
s
a
g
e
)
;

 
 
 
 
}

}


/
*
*

 
*
 
I
t
.
.
.
e
r
.
.
.
g
e
t
s
 
t
h
e
 
m
o
n
t
h
 
n
a
m
e
 
f
r
o
m
 
w
h
a
t
 
i
s
 
s
t
o
r
e
d
 
i
n
 
t
h
e
 
l
a
n
g
u
a
g
e
 
f
i
l
e
.

 
*
/

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
M
o
n
t
h
N
a
m
e
(
$
m
o
n
t
h
N
o
)

{

 
 
 
 
$
m
o
n
t
h
N
o
 
=
 
i
n
t
v
a
l
(
$
m
o
n
t
h
N
o
)
;


 
 
 
 
r
e
t
u
r
n
 
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
M
O
N
T
H
S
_
L
O
N
G
_
'
.
$
m
o
n
t
h
N
o
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
M
O
N
T
H
S
_
L
O
N
G
_
'
.
$
m
o
n
t
h
N
o
)
;

}


/
*
*

 
*
 
U
s
e
d
 
b
y
 
j
o
m
r
e
s
 
t
o
o
l
b
a
r
 
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
 
t
o
 
s
h
o
w
 
i
m
a
g
e
s

 
*

 
*
 
@
t
o
d
o
 
t
h
i
s
 
a
n
c
i
e
n
t
 
s
t
u
f
f

 
*
 

 
*
/

f
u
n
c
t
i
o
n
 
m
a
k
e
I
m
a
g
e
V
a
l
i
d
(
$
i
m
a
g
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

 
 
 
 
$
i
m
a
g
e
 
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
+
'
,
 
'
%
2
0
'
,
 
$
i
m
a
g
e
N
a
m
e
)
;

 
 
 
 
$
i
m
a
g
e
 
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
%
2
F
'
,
 
'
/
'
,
 
$
i
m
a
g
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
i
m
a
g
e
;

}


/
*
*

 
*
 
F
o
r
m
a
t
s
 
a
 
s
t
r
i
n
g
 
a
s
 
a
 
f
l
o
a
t

 
*

 
*
 
@
t
o
d
o
 
r
e
m
o
v
e
 
a
n
d
 
t
e
s
t
,
 
d
o
e
s
n
'
t
 
s
e
e
m
 
t
o
 
b
e
 
u
s
e
d
 
a
n
y
 
m
o
r
e

 
*

 
*
/

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
s
e
F
l
o
a
t
(
$
p
t
S
t
r
i
n
g
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
p
t
S
t
r
i
n
g
)
 
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


 
 
 
 
$
p
S
t
r
i
n
g
 
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
 
'
,
 
'
'
,
 
$
p
t
S
t
r
i
n
g
)
;


 
 
 
 
i
f
 
(
s
u
b
s
t
r
_
c
o
u
n
t
(
$
p
S
t
r
i
n
g
,
 
'
,
'
)
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
$
p
S
t
r
i
n
g
 
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
p
S
t
r
i
n
g
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
s
u
b
s
t
r
_
c
o
u
n
t
(
$
p
S
t
r
i
n
g
,
 
'
.
'
)
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
$
p
S
t
r
i
n
g
 
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
.
'
,
 
'
'
,
 
$
p
S
t
r
i
n
g
)
;

 
 
 
 
}


 
 
 
 
$
p
r
e
g
R
e
s
u
l
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
c
o
m
m
a
s
e
t
 
=
 
s
t
r
p
o
s
(
$
p
S
t
r
i
n
g
,
 
'
,
'
)
;

 
 
 
 
i
f
 
(
$
c
o
m
m
a
s
e
t
 
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
c
o
m
m
a
s
e
t
 
=
 
-
1
;

 
 
 
 
}


 
 
 
 
$
p
o
i
n
t
s
e
t
 
=
 
s
t
r
p
o
s
(
$
p
S
t
r
i
n
g
,
 
'
.
'
)
;

 
 
 
 
i
f
 
(
$
p
o
i
n
t
s
e
t
 
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
p
o
i
n
t
s
e
t
 
=
 
-
1
;

 
 
 
 
}


 
 
 
 
$
p
r
e
g
R
e
s
u
l
t
A
 
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
r
e
g
R
e
s
u
l
t
B
 
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
p
o
i
n
t
s
e
t
 
<
 
$
c
o
m
m
a
s
e
t
)
 
{

 
 
 
 
 
 
 
 
p
r
e
g
_
m
a
t
c
h
(
'
#
(
(
[
-
]
?
[
0
-
9
]
+
(
\
.
[
0
-
9
]
)
?
)
+
(
,
[
0
-
9
]
+
)
?
)
#
'
,
 
$
p
S
t
r
i
n
g
,
 
$
p
r
e
g
R
e
s
u
l
t
A
)
;

 
 
 
 
}

 
 
 
 
p
r
e
g
_
m
a
t
c
h
(
'
#
(
(
[
-
]
?
[
0
-
9
]
+
(
,
[
0
-
9
]
)
?
)
+
(
\
.
[
0
-
9
]
+
)
?
)
#
'
,
 
$
p
S
t
r
i
n
g
,
 
$
p
r
e
g
R
e
s
u
l
t
B
)
;

 
 
 
 
i
f
 
(
(
i
s
s
e
t
(
$
p
r
e
g
R
e
s
u
l
t
A
[
 
0
 
]
)
 
&
&
 
(
!
i
s
s
e
t
(
$
p
r
e
g
R
e
s
u
l
t
B
[
 
0
 
]
)
 
|
|
 
s
t
r
s
t
r
(
$
p
r
e
R
e
s
u
l
t
A
[
 
0
 
]
,
 
$
p
r
e
g
R
e
s
u
l
t
B
[
 
0
 
]
)
 
=
=
 
0
 
|
|
 
!
$
p
o
i
n
t
s
e
t
)
)
)
 
{

 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
S
t
r
i
n
g
 
=
 
$
p
r
e
g
R
e
s
u
l
t
A
[
 
0
 
]
;

 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
S
t
r
i
n
g
 
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
.
'
,
 
'
'
,
 
$
n
u
m
b
e
r
S
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
S
t
r
i
n
g
 
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
.
'
,
 
$
n
u
m
b
e
r
S
t
r
i
n
g
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
i
s
s
e
t
(
$
p
r
e
g
R
e
s
u
l
t
B
[
 
0
 
]
)
 
&
&
 
(
!
i
s
s
e
t
(
$
p
r
e
g
R
e
s
u
l
t
A
[
 
0
 
]
)
 
|
|
 
s
t
r
s
t
r
(
$
p
r
e
g
R
e
s
u
l
t
B
[
 
0
 
]
,
 
$
p
r
e
R
e
s
u
l
t
A
[
 
0
 
]
)
 
=
=
 
0
 
|
|
 
!
$
c
o
m
m
a
s
e
t
)
)
 
{

 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
S
t
r
i
n
g
 
=
 
$
p
r
e
g
R
e
s
u
l
t
B
[
 
0
 
]
;

 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
S
t
r
i
n
g
 
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
n
u
m
b
e
r
S
t
r
i
n
g
)
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

 
 
 
 
$
r
e
s
u
l
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
n
u
m
b
e
r
S
t
r
i
n
g
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


/
*
*

 
*
 
Q
u
i
c
k
e
r
 
r
e
p
l
a
c
e
m
e
n
t
 
t
o
 
s
c
a
n
d
i
r
 
t
o
 
f
i
n
d
 
d
i
r
e
c
t
o
r
y
 
c
o
n
t
e
n
t
s

 
*
/

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
d
i
r
e
c
t
o
r
y
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
d
i
r
)
 
 
/
/
 
R
e
p
l
a
c
e
m
e
n
t
 
f
o
r
 
s
c
a
n
d
i
r
 
w
h
i
c
h
 
s
e
e
m
s
 
t
o
 
b
e
 
c
a
u
s
i
n
g
 
s
y
s
t
e
m
 
s
l
o
w
d
o
w
n
s

{

 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
d
i
r
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
h
a
n
d
l
e
 
=
 
o
p
e
n
d
i
r
(
$
d
i
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
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

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
f
i
l
e
 
=
 
r
e
a
d
d
i
r
(
$
h
a
n
d
l
e
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
s
[
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
h
a
n
d
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
f
i
l
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
o
r
t
(
$
f
i
l
e
s
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
f
i
l
e
s
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


/
*
*

 
*
 
Q
u
i
c
k
e
r
 
r
e
p
l
a
c
e
m
e
n
t
 
f
o
r
 
s
c
a
n
d
i
r
 
t
o
 
g
e
t
 
s
u
b
 
d
i
r
e
c
t
o
r
i
e
s

 
*
/

f
u
n
c
t
i
o
n
 
s
c
a
n
d
i
r
_
g
e
t
d
i
r
e
c
t
o
r
i
e
s
(
$
p
a
t
h
)

{

 
 
 
 
$
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

 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
p
a
t
h
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
g
e
t
_
d
i
r
e
c
t
o
r
y
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
p
a
t
h
)
 
a
s
 
$
d
i
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
p
a
t
h
.
$
d
i
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
i
r
 
!
=
 
'
.
'
 
&
&
 
$
d
i
r
 
!
=
 
'
.
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
[
 
]
 
=
 
$
d
i
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	
/
/
e
c
h
o
 
"
s
c
a
n
d
i
r
_
g
e
t
d
i
r
e
c
t
o
r
i
e
s
 
e
x
e
c
u
t
e
d
 
f
o
r
 
"
.
$
p
a
t
h
.
'
<
b
r
>
'
;

 
 
 
 
r
e
t
u
r
n
 
$
d
a
t
a
;

}


/
*
*

 
*
 
Q
u
i
c
k
e
r
 
r
e
p
l
a
m
e
n
t
 
f
o
r
 
s
c
a
n
d
i
r

 
*
/

f
u
n
c
t
i
o
n
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
$
p
a
t
h
,
 
$
e
x
t
e
n
s
i
o
n
 
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
_
d
i
r
(
$
p
a
t
h
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
g
e
t
_
d
i
r
e
c
t
o
r
y
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
p
a
t
h
)
 
a
s
 
$
f
i
l
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
f
i
l
e
(
$
p
a
t
h
.
J
R
D
S
.
$
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
e
x
t
e
n
s
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
[
 
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
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
.
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
 
=
 
c
o
u
n
t
(
$
e
x
t
s
)
 
-
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
s
 
=
 
$
e
x
t
s
[
 
$
n
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
x
t
s
 
=
=
 
$
e
x
t
e
n
s
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
[
 
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	
/
/
e
c
h
o
 
"
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
 
e
x
e
c
u
t
e
d
 
f
o
r
 
"
.
$
p
a
t
h
.
'
<
b
r
>
'
;

 
 
 
 
r
e
t
u
r
n
 
$
d
a
t
a
;

}


/
/
 
C
r
e
d
i
t
 
:
 
h
t
t
p
:
/
/
w
w
w
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
s
c
a
n
d
i
r
.
p
h
p
#
1
0
9
1
4
0

/
*
*

 
*
 
O
f
t
e
n
 
u
s
e
d
 
t
o
 
f
i
n
d
 
o
b
s
o
l
e
t
e
 
f
i
l
e
s
,
 
s
o
 
w
e
'
l
l
 
p
a
s
s
 
b
a
c
k
 
a
n
 
e
m
p
t
y
 
a
r
r
a
y
 
i
f
 
t
h
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
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t

 
*
/

f
u
n
c
t
i
o
n
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
_
r
e
c
u
r
s
i
v
e
(
$
d
i
r
e
c
t
o
r
y
,
 
$
r
e
c
u
r
s
i
v
e
 
=
 
t
r
u
e
,
 
$
l
i
s
t
D
i
r
s
 
=
 
f
a
l
s
e
,
 
$
l
i
s
t
F
i
l
e
s
 
=
 
t
r
u
e
,
 
$
e
x
c
l
u
d
e
 
=
 
'
'
)

{

 
 
 
 
$
a
r
r
a
y
I
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

 
 
 
 
$
s
k
i
p
B
y
E
x
c
l
u
d
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
!
i
s
_
d
i
r
(
$
d
i
r
e
c
t
o
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
"
T
r
i
e
d
 
t
o
 
s
c
a
n
 
a
 
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
a
t
 
d
o
e
s
n
'
t
 
e
x
i
s
t
 
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
d
i
r
e
c
t
o
r
y
)
;

 
 
 
 
}

 
 
 
 
$
h
a
n
d
l
e
 
=
 
o
p
e
n
d
i
r
(
$
d
i
r
e
c
t
o
r
y
)
;

 
 
 
 
i
f
 
(
$
h
a
n
d
l
e
)
 
{

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
f
i
l
e
 
=
 
r
e
a
d
d
i
r
(
$
h
a
n
d
l
e
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
p
r
e
g
_
m
a
t
c
h
(
"
/
(
^
(
(
[
\
.
]
)
{
1
,
2
}
)
$
|
(
\
.
(
s
v
n
|
g
i
t
|
m
d
)
)
|
(
T
h
u
m
b
s
\
.
d
b
|
\
.
D
S
_
S
T
O
R
E
)
)
$
/
i
u
"
,
 
$
f
i
l
e
,
 
$
s
k
i
p
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
x
c
l
u
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
p
r
e
g
_
m
a
t
c
h
(
$
e
x
c
l
u
d
e
,
 
$
f
i
l
e
,
 
$
s
k
i
p
B
y
E
x
c
l
u
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
s
k
i
p
 
&
&
 
!
$
s
k
i
p
B
y
E
x
c
l
u
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
d
i
r
e
c
t
o
r
y
.
$
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
c
u
r
s
i
v
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
a
y
I
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
_
m
e
r
g
e
(
$
a
r
r
a
y
I
t
e
m
s
,
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
_
r
e
c
u
r
s
i
v
e
(
$
d
i
r
e
c
t
o
r
y
.
$
f
i
l
e
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
,
 
$
r
e
c
u
r
s
i
v
e
,
 
$
l
i
s
t
D
i
r
s
,
 
$
l
i
s
t
F
i
l
e
s
,
 
$
e
x
c
l
u
d
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
i
s
t
D
i
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
 
=
 
$
d
i
r
e
c
t
o
r
y
.
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
a
y
I
t
e
m
s
[
 
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
l
i
s
t
F
i
l
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
 
=
 
$
d
i
r
e
c
t
o
r
y
.
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
a
y
I
t
e
m
s
[
 
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
h
a
n
d
l
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
a
r
r
a
y
I
t
e
m
s
;

}


/
*
*

 
*
 
I
s
 
t
h
e
 
h
o
s
t
 
C
M
S
 
J
o
o
m
l
a
?

 
*
/

f
u
n
c
t
i
o
n
 
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)

{

 
 
 
 
i
f
 
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
!
=
 
'
j
o
o
m
l
a
3
'
 
&
&
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
!
=
 
'
j
o
o
m
l
a
4
'
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


/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

/
/
-
T
 
E
 
X
 
T
	
M
 
O
 
D
 
I
 
F
 
I
 
C
 
A
 
T
 
I
 
O
 
N
	
 
-
-
-
-

/
/
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


/
*
*

 
*
 
U
s
e
d
 
b
y
 
e
d
i
t
i
n
g
 
m
o
d
e
 
a
n
d
 
l
a
b
e
l
 
t
r
a
n
s
l
a
t
i
o
n
 
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
 
t
o
 
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
 
t
a
b
l
e
s

 
*
/

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
$
t
h
e
C
o
n
s
t
a
n
t
,
 
$
t
h
e
V
a
l
u
e
,
 
$
a
u
d
i
t
 
=
 
t
r
u
e
,
 
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
 
n
u
l
l
,
 
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
=
 
'
0
'
)

{

	
$
c
u
s
t
o
m
_
t
e
x
t
 
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
c
u
s
t
o
m
_
t
e
x
t
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
c
u
s
t
o
m
_
t
e
x
t
-
>
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
$
t
h
e
C
o
n
s
t
a
n
t
,
 
$
t
h
e
V
a
l
u
e
,
 
$
a
u
d
i
t
,
 
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
,
 
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
)
;

}


/
*
*

 
*
 
G
e
t
 
t
h
e
 
c
u
r
r
e
n
t
 
d
o
m
a
i
n

 
*
/

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
G
e
t
D
o
m
a
i
n
(
)

{

 
 
 
 
$
t
h
i
s
S
v
r
N
a
m
e
 
=
 
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
E
R
V
E
R
_
N
A
M
E
'
 
]
;

 
 
 
 
$
d
m
n
 
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
h
t
t
p
:
/
/
'
,
 
'
'
,
 
$
t
h
i
s
S
v
r
N
a
m
e
)
;


 
 
 
 
/
/
$
d
o
m
a
i
n
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
"
w
w
w
.
"
,
"
"
,
$
d
m
n
)
;

 
 
 
 
/
/
e
c
h
o
 
"
<
H
2
>
F
o
u
n
d
 
d
o
m
a
i
n
"
.
$
d
o
m
a
i
n
.
"
<
/
H
2
>
"
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
t
o
l
o
w
e
r
(
$
d
m
n
)
;

}


/
*
*

 
*
 
C
r
e
a
t
e
s
 
n
e
w
 
A
P
I
 
k
e
y
s
 
(
n
o
t
 
t
o
 
b
e
 
c
o
n
f
u
s
e
d
 
w
i
t
h
 
R
E
S
T
 
A
P
I
 
k
e
y
p
a
i
r
s
)
 
f
o
r
 
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

 
*
/

f
u
n
c
t
i
o
n
 
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

{

 
 
 
 
$
a
p
i
k
e
y
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
)
;

 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
=
 
t
r
u
e
;

 
 
 
 
w
h
i
l
e
 
(
$
k
e
e
p
l
o
o
k
i
n
g
)
:

 
 
 
 
 
 
 
 
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
 
a
p
i
k
e
y
 
=
 
'
"
.
$
a
p
i
k
e
y
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
p
l
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
 
m
a
n
a
g
e
r
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
m
a
n
a
g
e
r
s
 
W
H
E
R
E
 
a
p
i
k
e
y
 
=
 
'
"
.
$
a
p
i
k
e
y
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
c
l
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
e
m
p
t
y
(
$
p
l
i
s
t
)
 
&
&
 
e
m
p
t
y
(
$
c
l
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
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
k
e
e
p
l
o
o
k
i
n
g
)
 
{

 
 
 
 
 
 
 
 
$
a
p
i
k
e
y
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
)
;

 
 
 
 
}

 
 
 
 
e
n
d
w
h
i
l
e
;


 
 
 
 
r
e
t
u
r
n
 
$
a
p
i
k
e
y
;

}


/
*
*

 
*
 
C
r
e
a
t
e
s
 
a
 
r
a
n
d
o
m
 
s
t
r
i
n
g
,
 
d
e
f
a
u
l
t
 
l
e
n
g
t
h
 
5
0
 
c
h
a
r
s

 
*
/

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
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
$
l
e
n
g
t
h
 
=
 
5
0
)

{

 
 
 
 
$
s
t
r
 
=
 
'
'
;

 
 
 
 
/
/
 
d
e
f
i
n
e
 
p
o
s
s
i
b
l
e
 
c
h
a
r
a
c
t
e
r
s

 
 
 
 
/
/
$
p
o
s
s
i
b
l
e
 
=
 
"
0
1
2
3
4
5
6
7
8
9
b
c
d
f
g
h
j
k
m
n
p
q
r
s
t
v
w
x
y
z
"
;

 
 
 
 
$
p
o
s
s
i
b
l
e
 
=
 
'
a
b
c
d
f
g
h
i
j
k
l
m
n
o
p
q
r
s
t
u
v
w
x
y
z
A
B
C
D
F
G
H
I
J
K
L
M
N
O
P
Q
R
S
T
U
V
W
X
Y
Z
'
;

 
 
 
 
/
/
 
s
e
t
 
u
p
 
a
 
c
o
u
n
t
e
r

 
 
 
 
$
i
 
=
 
0
;

 
 
 
 
/
/
 
a
d
d
 
r
a
n
d
o
m
 
c
h
a
r
a
c
t
e
r
s
 
t
o
 
$
s
t
r
 
u
n
t
i
l
 
$
l
e
n
g
t
h
 
i
s
 
r
e
a
c
h
e
d

 
 
 
 
w
h
i
l
e
 
(
$
i
 
<
 
$
l
e
n
g
t
h
)
 
{

 
 
 
 
 
 
 
 
/
/
 
p
i
c
k
 
a
 
r
a
n
d
o
m
 
c
h
a
r
a
c
t
e
r
 
f
r
o
m
 
t
h
e
 
p
o
s
s
i
b
l
e
 
o
n
e
s

 
 
 
 
 
 
 
 
$
c
h
a
r
 
=
 
s
u
b
s
t
r
(
$
p
o
s
s
i
b
l
e
,
 
m
t
_
r
a
n
d
(
0
,
 
s
t
r
l
e
n
(
$
p
o
s
s
i
b
l
e
)
 
-
 
1
)
,
 
1
)
;

 
 
 
 
 
 
 
 
$
s
t
r
 
.
=
 
$
c
h
a
r
;

 
 
 
 
 
 
 
 
+
+
$
i
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


/
*
*

 
*
 
F
i
n
d
 
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
 
m
a
n
a
g
e
r
'
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
c
t
i
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

 
*
/

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


 
 
 
 
r
e
t
u
r
n
 
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
;

}


/
*
*

 
*
 
C
r
e
a
t
e
 
S
E
F
 
u
r
l
s
,
 
h
a
n
d
s
 
o
f
f
 
t
o
 
C
M
S
 
s
p
e
c
i
f
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
 
t
o
 
d
o
 
t
h
e
 
h
e
a
v
y
 
l
i
f
t
i
n
g

 
*
/

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
;


 
 
 
 
$
l
i
n
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
&
a
m
p
;
'
,
 
'
&
'
,
 
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
 
$
l
i
n
k
;

}


/
*
*

 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
g
u
e
s
t
 
d
e
t
a
i
l
s
 
f
r
o
m
 
t
h
e
 
t
m
p
g
u
e
s
t
s
 
s
e
s
s
i
o
n
 
d
a
t
a
.

 
*
/

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
b
o
o
k
i
n
g
g
u
e
s
t
d
a
t
a
(
)

{

 
 
 
 
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
u
s
e
r
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
D
e
e
t
s
;

}


/
*
*

 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
c
u
r
r
e
n
t
 
J
o
m
r
e
s
 
v
e
r
s
i
o
n

 
*
/

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
j
o
m
r
e
s
_
c
u
r
r
e
n
t
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


 
 
 
 
r
e
t
u
r
n
 
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
v
e
r
s
i
o
n
'
 
]
;

}


/
*
*

 
*
 
G
e
t
s
 
t
h
e
 
l
a
t
e
s
t
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
 
f
r
o
m
 
t
h
e
 
u
p
d
a
t
e
s
 
s
e
r
v
e
r

 
*
/

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
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
(
$
o
u
t
p
u
t
T
e
x
t
 
=
 
t
r
u
e
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
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
 
=
 
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
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
=
 
t
i
m
e
(
)
 
-
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
;

 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
>
 
3
6
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
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
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
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
u
f
f
e
r
 
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
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
'
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
:
/
/
u
p
d
a
t
e
s
.
j
o
m
r
e
s
4
.
n
e
t
/
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
=
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
)
 
{

	
	
	
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
v
e
r
s
i
o
n
s
_
d
e
v
.
p
h
p
'
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
_
s
t
r
i
n
g
 
=
 
'
v
e
r
s
i
o
n
s
.
p
h
p
'
;

	
	
}

	
	

	
	
$
b
u
f
f
e
r
 
=
 
'
'
;


	
	
t
r
y
 
{

	
	
	
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
b
u
f
f
e
r
 
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

	
	
}

	
	
c
a
t
c
h
 
(
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
 
l
a
t
e
s
t
 
J
o
m
r
e
s
 
v
e
r
s
i
o
n
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

	
	
}


 
 
 
 
 
 
 
 
i
f
 
(
$
b
u
f
f
e
r
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
'
,
 
$
b
u
f
f
e
r
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
b
u
f
f
e
r
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
 
$
o
u
t
p
u
t
T
e
x
t
 
)

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
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
"
>
S
o
r
r
y
,
 
c
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
a
t
e
s
t
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
,
 
i
s
 
t
h
e
r
e
 
a
 
f
i
r
e
w
a
l
l
 
p
r
e
v
e
n
t
i
n
g
 
c
o
m
m
u
n
i
c
a
t
i
o
n
 
w
i
t
h
 
h
t
t
p
:
/
/
u
p
d
a
t
e
s
.
j
o
m
r
e
s
4
.
n
e
t
 
?
 
A
l
t
e
r
n
a
t
i
v
e
l
y
,
 
p
l
e
a
s
e
 
c
h
e
c
k
 
t
h
a
t
 
C
U
R
L
 
i
s
 
e
n
a
b
l
e
d
 
o
n
 
t
h
i
s
 
w
e
b
s
e
r
v
e
r
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
e
l
s
e

 
 
 
 
 
 
 
 
 
 
 
 
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
 
$
b
u
f
f
e
r
;

 
 
 
 
}

}


/
*
*

 
*
 
R
e
t
u
r
n
s
 
t
r
u
e
 
i
f
 
t
h
i
s
 
v
e
r
s
i
o
n
 
i
s
 
l
a
t
e
s
t
,
 
o
t
h
e
r
w
i
s
e
 
r
e
t
u
r
n
s
 
f
a
l
s
e
.
 
o
u
t
p
u
t
T
e
x
t
 
f
l
a
g
 
i
s
 
f
o
r
 
u
s
e
 
b
y
 
d
e
f
e
r
r
e
d
 
t
a
s
k
s
 
t
h
a
t
 
w
i
l
l
 
e
m
a
i
l
 
a
d
m
i
n
 
i
f
 
t
h
e
 
s
y
s
t
e
m
 
h
a
s
 
b
e
e
n
 
u
p
d
a
t
e
d
.

 
*
/

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
j
o
m
r
e
s
_
v
e
r
s
i
o
n
(
 
$
o
u
t
p
u
t
T
e
x
t
 
=
 
t
r
u
e
 
)

{

 
 
 
 
$
t
h
i
s
_
v
e
r
s
i
o
n
 
=
 
g
e
t
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
r
r
e
n
t
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
;

 
 
 
 
$
l
a
t
e
s
t
_
v
e
r
s
i
o
n
 
=
 
g
e
t
_
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
(
$
o
u
t
p
u
t
T
e
x
t
)
;

 
 
 
 
i
f
 
(
$
l
a
t
e
s
t
_
v
e
r
s
i
o
n
 
=
=
 
f
a
l
s
e
 
)
 
{
 
/
/
 
C
o
m
m
s
 
e
r
r
o
r
 
t
a
l
k
i
n
g
 
t
o
 
J
o
m
r
e
s
.
n
e
t
 
s
e
r
v
e
r
,
 
c
a
n
'
t
 
d
o
 
a
n
y
t
h
i
n
g
 
e
l
s
e
 
s
o
 
w
e
'
l
l
 
r
e
t
u
r
n
 
N
U
L
L
 
b
e
c
a
u
s
e
 
w
e
 
d
o
n
'
t
 
w
a
n
t
 
t
h
e
 
s
y
s
t
e
m
 
d
o
i
n
g
 
a
n
y
t
h
i
n
g
 
e
l
s
e
.

 
 
 
 
 
 
 
 
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

 
 
 
 
$
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
 
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
.
'
,
 
$
l
a
t
e
s
t
_
v
e
r
s
i
o
n
)
;

 
 
 
 
$
t
h
i
s
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
 
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
.
'
,
 
$
t
h
i
s
_
v
e
r
s
i
o
n
)
;


 
 
 
 
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
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
2
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
2
 
]
 
=
 
0
;

 
 
 
 
}

 
 
 
 
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
h
i
s
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
2
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
2
 
]
 
=
 
0
;

 
 
 
 
}


 
 
 
 
$
l
a
t
e
s
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
=
 
$
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
0
 
]
;

 
 
 
 
$
l
a
t
e
s
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
=
 
$
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
1
 
]
;

 
 
 
 
$
l
a
t
e
s
t
_
r
e
v
i
s
_
v
e
r
s
i
o
n
 
=
 
$
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
2
 
]
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
m
a
j
o
r
_
v
e
r
s
i
o
n
 
=
 
$
t
h
i
s
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
0
 
]
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
m
i
n
o
r
_
v
e
r
s
i
o
n
 
=
 
$
t
h
i
s
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
1
 
]
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
r
e
v
i
s
_
v
e
r
s
i
o
n
 
=
 
$
t
h
i
s
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
[
 
2
 
]
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
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
e
 
=
 
t
r
u
e
;


 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
<
 
$
l
a
t
e
s
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n

 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
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

 
 
 
 
}


 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
<
=
 
$
l
a
t
e
s
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
&
&
 
$
c
u
r
r
e
n
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
<
=
 
$
l
a
t
e
s
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
&
&
 
$
c
u
r
r
e
n
t
_
r
e
v
i
s
_
v
e
r
s
i
o
n
 
<
 
$
l
a
t
e
s
t
_
r
e
v
i
s
_
v
e
r
s
i
o
n

 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
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

 
 
 
 
}


 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
<
=
 
$
l
a
t
e
s
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
&
&
 
$
c
u
r
r
e
n
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
<
 
$
l
a
t
e
s
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n

 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
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

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
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
 
d
e
v
e
l
o
p
m
e
n
t
_
m
o
d
e
_
t
e
s
t
(
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
 
]
 
!
=
 
'
p
r
o
d
u
c
t
i
o
n
'
)
 
{
 
/
/
 
T
h
e
 
d
e
f
a
u
l
t
 
i
s
 
1
0
0
0
 
o
n
 
m
o
s
t
 
i
n
s
t
a
l
l
a
t
i
o
n
s

 
 
 
 
 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
'
 
:
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
"
<
d
i
v
 
c
l
a
s
s
=
'
"
.
$
h
i
g
h
l
i
g
h
t
.
"
'
>
B
e
 
a
w
a
r
e
 
t
h
a
t
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
s
i
t
e
 
w
i
t
h
 
D
e
v
e
l
o
p
m
e
n
t
 
m
o
d
e
 
e
n
a
b
l
e
d
.
 
U
n
l
e
s
s
 
y
o
u
 
a
r
e
 
a
 
d
e
v
e
l
o
p
e
r
 
w
e
 
d
o
 
n
o
t
 
a
d
v
i
s
e
 
t
h
a
t
 
y
o
u
 
l
e
a
v
e
 
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
 
e
n
a
b
l
e
d
.
 
T
o
 
c
h
a
n
g
e
 
i
t
 
g
o
 
t
o
 
S
i
t
e
 
S
e
t
t
i
n
g
s
 
>
 
D
e
b
u
g
g
i
n
g
 
t
a
b
 
a
n
d
 
s
e
t
 
t
h
e
 
m
o
d
e
 
t
o
 
P
r
o
d
u
c
t
i
o
n
.
<
/
d
i
v
>
"
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
s
p
o
n
s
e
;

}


/
*
*

 
*
 
T
r
y
 
t
o
 
d
e
t
e
r
m
i
n
e
 
p
h
p
.
i
n
i
'
s
 
m
a
x
 
i
n
p
u
t
 
v
a
r
s
 
s
e
t
t
i
n
g
 
t
h
e
n
 
s
h
o
w
 
a
n
 
a
l
e
r
t
 
i
f
 
t
h
e
 
s
e
t
t
i
n
g
 
i
s
 
t
o
o
 
l
o
w
 
f
o
r
 
m
i
c
r
o
m
a
n
a
g
e
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
.

 
*
/

f
u
n
c
t
i
o
n
 
m
a
x
_
i
n
p
u
t
_
v
a
r
s
_
t
e
s
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

 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
'
'
;

 
 
 
 
$
m
a
x
_
v
a
r
s
 
=
 
(
i
n
t
)
 
i
n
i
_
g
e
t
(
'
m
a
x
_
i
n
p
u
t
_
v
a
r
s
'
)
;

 
 
 
 
i
f
 
(
$
m
a
x
_
v
a
r
s
 
<
 
1
0
0
1
 
&
&
 
i
s
s
e
t
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
 
'
0
0
0
0
5
'
]
[
'
a
d
v
a
n
c
e
d
_
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
_
e
d
i
t
i
n
g
_
m
o
d
e
s
'
 
]
)
)
 
{
 
/
/
 
T
h
e
 
d
e
f
a
u
l
t
 
i
s
 
1
0
0
0
 
o
n
 
m
o
s
t
 
i
n
s
t
a
l
l
a
t
i
o
n
s

 
 
 
 
 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
'
 
:
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
"
<
d
i
v
 
c
l
a
s
s
=
'
"
.
$
h
i
g
h
l
i
g
h
t
.
"
'
>
P
l
e
a
s
e
 
n
o
t
e
,
 
y
o
u
r
 
m
a
x
_
i
n
p
u
t
_
v
a
r
s
 
s
e
t
t
i
n
g
 
s
e
e
m
s
 
t
o
 
b
e
 
s
e
t
 
t
o
 
1
0
0
0
,
 
w
h
i
c
h
 
i
s
 
t
h
e
 
d
e
f
a
u
l
t
 
s
e
t
t
i
n
g
.
 
I
f
 
y
o
u
'
r
e
 
u
s
i
n
g
 
t
h
e
 
M
i
c
r
o
m
a
n
a
g
e
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
 
a
n
d
 
w
i
s
h
 
t
o
 
s
a
v
e
 
p
r
i
c
e
s
 
f
o
r
 
m
o
r
e
 
t
h
a
n
 
a
 
y
e
a
r
 
i
n
 
a
d
v
a
n
c
e
,
 
w
e
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
c
h
a
n
g
e
 
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
 
t
o
 
3
0
0
0
 
o
r
 
m
o
r
e
.
 
<
a
 
h
r
e
f
=
\
"
h
t
t
p
:
/
/
w
w
w
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
m
a
n
u
a
l
/
d
e
v
e
l
o
p
e
r
s
-
g
u
i
d
e
/
5
6
-
o
t
h
e
r
-
d
i
s
c
u
s
s
i
o
n
s
/
3
6
4
-
m
a
x
-
i
n
p
u
t
-
v
a
r
s
-
m
a
x
-
i
n
p
u
t
-
v
a
r
s
-
i
n
-
p
h
p
-
i
n
i
\
"
 
t
a
r
g
e
t
=
\
"
_
b
l
a
n
k
\
"
>
T
h
i
s
 
p
a
g
e
 
<
/
a
>
h
a
s
 
 
m
o
r
e
 
i
n
f
o
r
m
a
t
i
o
n
.
<
/
d
i
v
>
"
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
s
p
o
n
s
e
;

}


/
*
*

 
*
 
T
r
y
 
t
o
 
d
e
t
e
r
m
i
n
e
 
i
f
 
s
u
h
o
s
i
n
 
h
a
s
 
a
 
m
a
x
_
v
a
l
u
e
_
l
e
n
g
t
h
 
s
e
t
t
i
n
g
 
t
h
a
t
 
c
a
n
 
c
a
u
s
e
 
p
r
o
b
l
e
m
s
.

 
*
/

f
u
n
c
t
i
o
n
 
s
u
h
o
s
i
n
_
g
e
t
_
m
a
x
_
v
a
r
s
_
t
e
s
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

 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
'
'
;

 
 
 
 
$
m
a
x
_
v
a
r
s
 
=
 
(
i
n
t
)
 
i
n
i
_
g
e
t
(
'
s
u
h
o
s
i
n
.
g
e
t
.
m
a
x
_
v
a
l
u
e
_
l
e
n
g
t
h
'
)
;


 
 
 
 
i
f
 
(
$
m
a
x
_
v
a
r
s
 
!
=
 
0
 
&
&
 
$
m
a
x
_
v
a
r
s
 
<
=
 
5
1
2
)
 
{
 
/
/
 
T
h
e
 
d
e
f
a
u
l
t
 
i
s
 
5
1
2
 
o
n
 
m
o
s
t
 
i
n
s
t
a
l
l
a
t
i
o
n
s
 
w
i
t
h
 
t
h
e
 
s
u
h
o
s
i
n
 
p
a
t
c
h

 
 
 
 
 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
'
 
:
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
"
<
d
i
v
 
c
l
a
s
s
=
'
"
.
$
h
i
g
h
l
i
g
h
t
.
"
'
>
P
l
e
a
s
e
 
n
o
t
e
 
t
h
a
t
 
P
H
P
 
s
e
t
u
p
s
 
w
i
t
h
 
t
h
e
 
s
u
h
o
s
i
n
 
p
a
t
c
h
 
i
n
s
t
a
l
l
e
d
 
w
i
l
l
 
h
a
v
e
 
a
 
d
e
f
a
u
l
t
 
l
i
m
i
t
 
o
f
 
5
1
2
 
c
h
a
r
a
c
t
e
r
s
 
f
o
r
 
g
e
t
 
p
a
r
a
m
e
t
e
r
s
.
 
A
l
t
h
o
u
g
h
 
b
a
d
 
p
r
a
c
t
i
c
e
,
 
m
o
s
t
 
b
r
o
w
s
e
r
s
 
(
i
n
c
l
u
d
i
n
g
 
I
E
)
 
s
u
p
p
o
r
t
s
 
U
R
L
s
 
u
p
 
t
o
 
a
r
o
u
n
d
 
2
0
0
0
 
c
h
a
r
a
c
t
e
r
s
,
 
w
h
i
l
e
 
A
p
a
c
h
e
 
h
a
s
 
a
 
d
e
f
a
u
l
t
 
o
f
 
8
0
0
0
.
 
T
o
 
a
d
d
 
s
u
p
p
o
r
t
 
f
o
r
 
l
o
n
g
 
p
a
r
a
m
e
t
e
r
s
 
w
i
t
h
 
s
u
h
o
s
i
n
,
 
a
d
d
 
s
u
h
o
s
i
n
.
g
e
t
.
m
a
x
_
v
a
l
u
e
_
l
e
n
g
t
h
 
=
 
<
l
i
m
i
t
>
 
i
n
 
p
h
p
.
i
n
i
<
/
d
i
v
>
"
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
s
p
o
n
s
e
;

}


/
*
*

 
*
 
C
h
e
c
k
 
t
h
a
t
 
t
h
e
 
g
o
o
g
l
e
 
m
a
p
s
 
a
p
i
 
k
e
y
 
h
a
s
 
b
e
e
n
 
s
e
t

 
*
/

f
u
n
c
t
i
o
n
 
g
m
a
p
s
_
a
p
i
k
e
y
_
c
h
e
c
k
(
)

{

 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
'
;

 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
w
a
r
n
i
n
g
'
 
:
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
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
g
o
o
g
l
e
_
m
a
p
s
_
a
p
i
_
k
e
y
'
]
)
 
|
|
 
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
o
o
g
l
e
_
m
a
p
s
_
a
p
i
_
k
e
y
'
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
'
.
$
h
i
g
h
l
i
g
h
t
.
'
"
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
G
M
A
P
_
K
E
Y
_
W
A
R
N
I
N
G
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
G
M
A
P
_
K
E
Y
_
W
A
R
N
I
N
G
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
/
d
i
v
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
 
$
m
e
s
s
a
g
e
;

}


/
*
*

 
*
 
C
h
e
c
k
 
t
h
a
t
 
t
h
e
 
i
p
 
i
n
f
o
 
d
b
 
a
p
i
 
k
e
y
 
i
s
 
s
e
t

 
*
/

f
u
n
c
t
i
o
n
 
i
p
i
n
f
o
d
b
_
a
p
i
k
e
y
_
c
h
e
c
k
(
)

{

 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
'
;

 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
i
n
f
o
'
 
:
 
'
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
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
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
'
]
 
&
&
 
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
g
e
o
l
o
c
a
t
i
o
n
_
a
p
i
_
k
e
y
'
]
)
 
|
|
 
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
e
o
l
o
c
a
t
i
o
n
_
a
p
i
_
k
e
y
'
]
 
=
=
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
'
.
$
h
i
g
h
l
i
g
h
t
.
'
"
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
I
P
I
N
F
O
D
B
_
K
E
Y
_
W
A
R
N
I
N
G
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
I
P
I
N
F
O
D
B
_
K
E
Y
_
W
A
R
N
I
N
G
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
/
d
i
v
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
 
$
m
e
s
s
a
g
e
;

}


/
*
*

 
*
 
C
h
e
s
t
 
t
h
a
t
 
t
h
e
 
O
p
e
n
E
x
c
h
a
n
g
e
 
r
a
t
e
s
 
s
e
r
v
i
c
e
'
s
 
A
P
I
 
k
e
y
 
h
a
s
 
b
e
e
n
 
s
e
t

 
*
/

f
u
n
c
t
i
o
n
 
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
a
p
i
k
e
y
_
c
h
e
c
k
(
)

{

 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
'
;

 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
i
n
f
o
'
 
:
 
'
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
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
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
'
]
 
&
&
 
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
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
a
p
i
_
k
e
y
'
]
)
 
|
|
 
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
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
a
p
i
_
k
e
y
'
]
 
=
=
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
'
.
$
h
i
g
h
l
i
g
h
t
.
'
"
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
O
P
E
N
E
X
C
H
A
N
G
E
R
A
T
E
S
_
K
E
Y
_
W
A
R
N
I
N
G
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
O
P
E
N
E
X
C
H
A
N
G
E
R
A
T
E
S
_
K
E
Y
_
W
A
R
N
I
N
G
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
/
d
i
v
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
 
$
m
e
s
s
a
g
e
;

}


/
*
*

 
*
 
C
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
l
o
g
 
p
a
t
h
s
 
s
e
t
t
i
n
g
 
h
a
s
 
b
e
e
n
 
s
e
t
.

 
*
/

f
u
n
c
t
i
o
n
 
l
o
g
s
_
p
a
t
h
_
c
h
e
c
k
(
)

{

 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
'
;

 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
w
a
r
n
i
n
g
'
 
:
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
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
l
o
g
_
p
a
t
h
'
]
)
 
|
|
 
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
l
o
g
_
p
a
t
h
'
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
'
.
$
h
i
g
h
l
i
g
h
t
.
'
"
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
L
O
G
_
L
O
C
A
T
I
O
N
_
W
A
R
N
I
N
G
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
L
O
G
_
L
O
C
A
T
I
O
N
_
W
A
R
N
I
N
G
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
/
d
i
v
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
 
$
m
e
s
s
a
g
e
;

}


/
*
*

 
*
 
C
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
i
m
a
g
e
 
f
i
l
e
 
p
a
t
h
s
 
n
e
e
d
 
t
o
 
b
e
 
i
m
p
o
r
t
e
d
 
i
n
t
o
 
t
h
e
 
d
a
t
a
b
a
s
e
.

 
*
/

f
u
n
c
t
i
o
n
 
d
b
_
i
m
a
g
e
s
_
i
m
p
o
r
t
_
c
h
e
c
k
(
)

{

 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
'
;

 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
w
a
r
n
i
n
g
'
 
:
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
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
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
d
b
'
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'

<
d
i
v
 
c
l
a
s
s
=
"
'
.
$
h
i
g
h
l
i
g
h
t
.
'
"
>

	
<
p
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
W
A
R
N
I
N
G
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
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
W
A
R
N
I
N
G
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
/
p
>

	
<
a
 
h
r
e
f
=
"
'
.
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
m
e
d
i
a
_
c
e
n
t
r
e
_
d
b
i
m
p
o
r
t
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
w
a
r
n
i
n
g
"
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
A
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
A
C
T
I
O
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
<
/
a
>

<
/
d
i
v
>
'
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
 
'
'
;

	
}


 
 
 
 
r
e
t
u
r
n
 
$
m
e
s
s
a
g
e
;

}


/
*
*

 
*
 
C
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
i
t
'
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
 
i
m
p
o
r
t
 
s
3
 
i
m
a
g
e
s

 
*
/

f
u
n
c
t
i
o
n
 
s
3
_
i
m
a
g
e
s
_
i
m
p
o
r
t
_
c
h
e
c
k
(
)

{

 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'
'
;

 
 
 
 
$
h
i
g
h
l
i
g
h
t
 
=
 
(
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
 
?
 
'
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
 
:
 
'
u
i
-
s
t
a
t
e
-
e
r
r
o
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
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
d
b
'
]
 
=
=
 
'
1
'
 
&
&
 

	
	
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
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
s
3
'
]
 
=
=
 
'
0
'
 
&
&
 

	
	
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
m
a
z
o
n
_
s
3
_
a
c
t
i
v
e
'
]
 
=
=
 
'
1
'
 
&
&
 

	
	
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
m
a
z
o
n
_
s
3
_
b
u
c
k
e
t
'
]
 
!
=
 
'
'
 
&
&
 
 

	
	
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
m
a
z
o
n
_
s
3
_
k
e
y
'
]
 
!
=
 
'
'
 
&
&
 

	
	
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
m
a
z
o
n
_
s
3
_
s
e
c
r
e
t
'
]
 
!
=
 
'
'

	
	
)
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
'

<
d
i
v
 
c
l
a
s
s
=
"
'
.
$
h
i
g
h
l
i
g
h
t
.
'
"
>

	
<
p
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
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
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
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
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
/
p
>

	
<
p
>
<
s
t
r
o
n
g
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
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
2
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
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
2
'
,
 
f
a
l
s
e
)
)
.
'
<
/
s
t
r
o
n
g
>
<
/
p
>

	
<
a
 
h
r
e
f
=
"
'
.
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
m
e
d
i
a
_
c
e
n
t
r
e
_
s
3
i
m
p
o
r
t
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
d
a
n
g
e
r
 
b
t
n
-
e
r
r
o
r
"
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
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
A
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
A
C
T
I
O
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
<
/
a
>

<
/
d
i
v
>
'
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
 
'
'
;

	
}


 
 
 
 
r
e
t
u
r
n
 
$
m
e
s
s
a
g
e
;

}

