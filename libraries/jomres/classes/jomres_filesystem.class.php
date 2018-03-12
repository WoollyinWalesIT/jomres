
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


u
s
e
 
L
e
a
g
u
e
\
F
l
y
s
y
s
t
e
m
\
F
i
l
e
s
y
s
t
e
m
;

u
s
e
 
L
e
a
g
u
e
\
F
l
y
s
y
s
t
e
m
\
A
d
a
p
t
e
r
\
L
o
c
a
l
;

u
s
e
 
L
e
a
g
u
e
\
F
l
y
s
y
s
t
e
m
\
M
o
u
n
t
M
a
n
a
g
e
r
;

u
s
e
 
A
w
s
\
S
3
\
S
3
C
l
i
e
n
t
;

u
s
e
 
L
e
a
g
u
e
\
F
l
y
s
y
s
t
e
m
\
A
w
s
S
3
v
3
\
A
w
s
S
3
A
d
a
p
t
e
r
;


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
f
i
l
e
s
y
s
t
e
m

{

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
f
i
l
e
s
y
s
t
e
m
;

	

	
p
r
o
t
e
c
t
e
d
 
$
j
r
C
o
n
f
i
g
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
$
l
o
c
a
l
_
r
o
o
t
_
d
i
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
t
h
i
s
-
>
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
$
l
o
c
a
l
_
r
o
o
t
_
d
i
r
)
 
{

	
	
	
$
l
o
c
a
l
_
r
o
o
t
_
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
P
A
T
H
_
B
A
S
E
;

	
	
}


	
	
/
/
m
o
u
n
t
 
l
o
c
a
l
 
f
i
l
e
s
y
s
t
e
m

	
	
$
t
h
i
s
-
>
m
o
u
n
t
_
l
o
c
a
l
_
f
i
l
e
s
y
s
t
e
m
(
$
l
o
c
a
l
_
r
o
o
t
_
d
i
r
)
;

	
	

	
	
/
/
m
o
u
n
t
 
s
3
 
f
i
l
e
s
y
s
t
e
m
 
i
f
 
e
n
a
b
l
e
d

	
	
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
t
h
i
s
-
>
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
t
h
i
s
-
>
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
t
h
i
s
-
>
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
t
h
i
s
-
>
m
o
u
n
t
_
s
3
_
f
i
l
e
s
y
s
t
e
m
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
F
i
l
e
s
y
s
t
e
m
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
f
i
l
e
s
y
s
t
e
m
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
 
m
o
u
n
t
_
l
o
c
a
l
_
f
i
l
e
s
y
s
t
e
m
(
$
l
o
c
a
l
_
r
o
o
t
_
d
i
r
 
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
l
o
c
a
l
 
a
d
a
p
t
e
r

	
	
$
l
o
c
a
l
A
d
a
p
t
e
r
 
=
 
n
e
w
 
L
o
c
a
l
(
$
l
o
c
a
l
_
r
o
o
t
_
d
i
r
,
 
L
O
C
K
_
E
X
,
 
L
o
c
a
l
:
:
D
I
S
A
L
L
O
W
_
L
I
N
K
S
,
 
[

	
	
	
'
f
i
l
e
'
 
=
>
 
[

	
	
	
	
'
p
u
b
l
i
c
'
 
=
>
 
0
6
4
4
,

	
	
	
	
'
p
r
i
v
a
t
e
'
 
=
>
 
0
6
0
0
,

	
	
	
]
,

	
	
	
'
d
i
r
'
 
=
>
 
[

	
	
	
	
'
p
u
b
l
i
c
'
 
=
>
 
0
7
5
5
,

	
	
	
	
'
p
r
i
v
a
t
e
'
 
=
>
 
0
7
0
0
,

	
	
	
]

	
	
]
)
;

	
	

	
	
$
l
o
c
a
l
 
=
 
n
e
w
 
F
i
l
e
s
y
s
t
e
m
(
$
l
o
c
a
l
A
d
a
p
t
e
r
)
;

	
	

	
	
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
 
=
 
n
e
w
 
M
o
u
n
t
M
a
n
a
g
e
r
(
[

	
	
	
'
l
o
c
a
l
'
 
=
>
 
$
l
o
c
a
l

	
	
]
)
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
 
m
o
u
n
t
_
s
3
_
f
i
l
e
s
y
s
t
e
m
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
u
s
e
_
t
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

	
	
	
$
s
c
h
e
m
e
 
=
 
'
h
t
t
p
s
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
c
h
e
m
e
 
=
 
'
h
t
t
p
'
;

	
	
}

	
	

	
	
/
/
s
3
 
a
d
a
p
t
e
r

	
	
$
s
3
c
l
i
e
n
t
 
=
 
S
3
C
l
i
e
n
t
:
:
f
a
c
t
o
r
y
(
[

	
	
	
'
c
r
e
d
e
n
t
i
a
l
s
'
 
=
>
 
[

	
	
	
	
'
k
e
y
'
 
 
 
 
=
>
 
$
t
h
i
s
-
>
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
,

	
	
	
	
'
s
e
c
r
e
t
'
 
=
>
 
$
t
h
i
s
-
>
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
,

	
	
	
]
,

	
	
	
'
r
e
g
i
o
n
'
 
=
>
 
$
t
h
i
s
-
>
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
r
e
g
i
o
n
'
]
,

	
	
	
'
v
e
r
s
i
o
n
'
 
=
>
 
'
l
a
t
e
s
t
'
,

	
	
	
'
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
 
=
>
 
f
a
l
s
e
,

	
	
	
'
s
c
h
e
m
e
'
 
=
>
 
$
s
c
h
e
m
e
,

	
	
	
/
*
 
'
h
t
t
p
'
 
 
 
 
=
>
 
[

	
	
	
	
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
 
$
t
h
i
s
-
>
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
t
l
s
_
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
_
p
a
t
h
'
]

	
	
	
]
 
*
/

	
	
]
)
;


	
	
$
s
3
A
d
a
p
t
e
r
 
=
 
n
e
w
 
A
w
s
S
3
A
d
a
p
t
e
r
(

	
	
	
$
s
3
c
l
i
e
n
t
,
 

	
	
	
$
t
h
i
s
-
>
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
,
 

	
	
	
n
u
l
l
,
 

	
	
	
a
r
r
a
y
(
'
A
C
L
'
 
=
>
 
'
p
u
b
l
i
c
-
r
e
a
d
'
)
 
/
/
i
f
 
n
o
t
 
s
e
t
,
 
f
i
l
e
s
 
u
p
l
o
a
d
e
d
 
t
o
 
S
3
 
w
i
l
l
 
b
e
 
p
r
i
v
a
t
e

	
	
)
;

	
	

	
	
$
s
3
 
=
 
n
e
w
 
F
i
l
e
s
y
s
t
e
m
(
$
s
3
A
d
a
p
t
e
r
)
;

	
	

	
	
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
m
o
u
n
t
F
i
l
e
s
y
s
t
e
m
(
'
s
3
'
,
 
$
s
3
)
;

	
}

}

