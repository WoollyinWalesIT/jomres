
<
?
p
h
p

/
*
*

 
*
 
A
l
l
o
w
s
 
R
E
S
T
 
A
P
I
 
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
 
c
a
l
l
 
t
h
e
 
s
a
m
e
 
s
e
r
v
e
r
 
t
o
 
f
a
c
i
l
l
i
t
a
t
e
 
r
e
u
s
e
 
o
f
 
e
x
i
s
t
i
n
g
 
R
E
S
T
 
A
P
I
 
f
e
a
t
u
r
e
s

 
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

*
 
C
a
l
l
 
a
 
l
o
c
a
l
 
R
E
S
T
 
A
P
I
 
f
e
a
t
u
r
e
.
 
W
i
l
l
 
o
n
l
y
 
w
o
r
k
 
i
f
 
t
h
e
 
o
r
i
g
i
n
a
l
 
O
A
u
t
h
2
 
k
e
y
 
p
a
i
r
 
a
r
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
 
t
o
 
c
a
l
l
 
t
h
e
 
s
p
e
c
i
f
i
c
 
A
P
I
 
f
u
n
c
t
i
o
n
 
(
i
n
 
s
c
o
p
e
)

*

*
/

c
l
a
s
s
 
c
a
l
l
_
s
e
l
f

{

	
/
*
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
o
r
.
 
S
e
t
s
 
u
p
 
e
n
d
p
o
i
n
t
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
 
o
r
i
g
i
n
a
l
 
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

	
*

	
*
/

 
 
 
 
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
t
o
k
e
n
 
=
 
F
l
i
g
h
t
:
:
g
e
t
(
'
t
o
k
e
n
'
)
;

 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
 
=
 
F
l
i
g
h
t
:
:
r
e
q
u
e
s
t
(
)
;

 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
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
 
'
o
n
'
 
=
=
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
S
'
]
 
?
 
'
h
t
t
p
s
'
 
:
 
'
h
t
t
p
'
;

 
 
 
 
 
 
 
 
$
u
r
l
 
.
=
 
'
:
/
/
'
.
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
u
r
l
 
.
=
 
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
,
 
a
r
r
a
y
(
'
8
0
'
,
 
'
4
4
3
'
)
)
 
?
 
'
'
 
:
 
'
:
'
.
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

 
 
 
 
 
 
 
 
$
u
r
l
 
.
=
 
$
r
e
q
u
e
s
t
-
>
b
a
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
s
e
l
f
_
u
r
l
 
=
 
$
u
r
l
.
'
/
'
;

 
 
 
 
}


	
/
*
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
 
C
a
l
l
 
c
l
a
s
s
 
t
o
 
c
a
l
l
 
t
h
e
 
l
o
c
a
l
 
s
e
r
v
e
r

	
*

	
*
/

 
 
 
 
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
a
l
l
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
e
l
e
m
e
n
t
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
E
r
r
o
r
,
 
n
o
 
r
e
q
u
e
s
t
 
e
l
e
m
e
n
t
s
 
s
e
t
 
'
)
;

 
 
 
 
 
 
 
 
}


/
*
 
	
	
i
f
 
(
F
l
i
g
h
t
:
:
g
e
t
(
"
o
r
i
g
i
n
a
l
_
c
a
l
l
"
)
 
=
=
 
"
/
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
s
[
"
r
e
q
u
e
s
t
"
]
)

 
 
 
 
 
 
 
 
 
 
 
 
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
E
r
r
o
r
,
 
r
e
c
u
r
s
i
o
n
.
 
"
)
;
 
*
/


 
 
 
 
 
 
 
 
$
c
a
l
l
 
=
 
n
e
w
 
c
a
l
l
(
)
;


 
 
 
 
 
 
 
 
$
o
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
e
r
v
e
r
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
s
e
l
f
_
u
r
l
,

 
 
 
 
 
 
 
 
 
 
 
 
'
t
o
k
e
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
t
o
k
e
n
,

 
 
 
 
 
 
 
 
 
 
 
 
'
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
e
l
e
m
e
n
t
s
[
'
m
e
t
h
o
d
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
q
u
e
s
t
'
 
=
>
 
$
e
l
e
m
e
n
t
s
[
'
r
e
q
u
e
s
t
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
=
>
 
$
e
l
e
m
e
n
t
s
[
'
d
a
t
a
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
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
a
l
l
-
>
c
a
l
l
_
s
e
r
v
e
r
(
$
o
p
t
i
o
n
s
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
p
o
n
s
e
[
'
r
e
s
u
l
t
'
]
;

 
 
 
 
}

}

